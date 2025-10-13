import { useRef, useState } from "react";
import { motion, useInView } from "motion/react";
import { Button } from "./ui/button";
import { Input } from "./ui/input";
import { Textarea } from "./ui/textarea";
import { Label } from "./ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "./ui/select";
import { Mail, MessageSquare, Briefcase, BookOpen, HelpCircle, CheckCircle } from "lucide-react";

export function ContactSection() {
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true, amount: 0.3 });
  const [isSubmitted, setIsSubmitted] = useState(false);

  const [formData, setFormData] = useState({
    name: "",
    email: "",
    company: "",
    subject: "",
    message: "",
  });

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setIsSubmitted(true);
    setTimeout(() => {
      setFormData({
        name: "",
        email: "",
        company: "",
        subject: "",
        message: "",
      });
      setIsSubmitted(false);
    }, 3000);
  };

  const handleInputChange = (field: string, value: string) => {
    setFormData(prev => ({ ...prev, [field]: value }));
  };

  const contactReasons = [
    {
      icon: Briefcase,
      title: "Consultancy",
      description: "Explore strategic partnerships and advisory services",
    },
    {
      icon: MessageSquare,
      title: "Speaking",
      description: "Invite me to speak at your event or podcast",
    },
    {
      icon: BookOpen,
      title: "Collaboration",
      description: "Discuss content collaboration and joint projects",
    },
    {
      icon: HelpCircle,
      title: "General Inquiry",
      description: "Ask questions or share feedback",
    },
  ];

  return (
    <section id="contact" ref={ref} className="py-24 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6 }}
          className="text-center mb-16"
        >
          <h2
            className="mb-4 text-4xl sm:text-5xl tracking-tight"
            style={{ color: "var(--deep-tech-blue)" }}
          >
            Let's Connect
          </h2>
          <div
            className="w-24 h-1 mx-auto mb-6"
            style={{ backgroundColor: "var(--warm-ember)" }}
          />
          <p className="text-xl max-w-3xl mx-auto text-gray-700">
            Whether you're looking for consultancy, speaking engagements, 
            collaborations, or just want to say hello — I'd love to hear from you.
          </p>
        </motion.div>

        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
          {contactReasons.map((reason, index) => (
            <motion.div
              key={reason.title}
              initial={{ opacity: 0, y: 30 }}
              animate={isInView ? { opacity: 1, y: 0 } : {}}
              transition={{ duration: 0.6, delay: 0.2 + index * 0.1 }}
              className="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow"
            >
              <div
                className="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                style={{ backgroundColor: "var(--deep-tech-blue)" }}
              >
                <reason.icon className="text-white" size={24} />
              </div>
              <h3
                className="mb-2"
                style={{ color: "var(--deep-tech-blue)" }}
              >
                {reason.title}
              </h3>
              <p className="text-gray-600 text-sm">{reason.description}</p>
            </motion.div>
          ))}
        </div>

        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6, delay: 0.6 }}
          className="bg-white p-8 md:p-12 rounded-2xl shadow-xl max-w-3xl mx-auto"
        >
          <div className="flex items-center justify-center mb-8">
            <div
              className="w-16 h-16 rounded-full flex items-center justify-center"
              style={{ backgroundColor: "var(--sunset-orange)" }}
            >
              <Mail className="text-white" size={28} />
            </div>
          </div>

          <h3
            className="mb-8 text-2xl text-center tracking-tight"
            style={{ color: "var(--deep-tech-blue)" }}
          >
            Send Me a Message
          </h3>

          <form onSubmit={handleSubmit} className="space-y-6">
            <div className="grid md:grid-cols-2 gap-6">
              <div className="space-y-2">
                <Label htmlFor="name">Name *</Label>
                <Input
                  id="name"
                  value={formData.name}
                  onChange={(e) => handleInputChange("name", e.target.value)}
                  required
                  placeholder="John Doe"
                  className="transition-all"
                  style={{ borderColor: "var(--deep-tech-blue)" }}
                  onFocus={(e) => {
                    e.currentTarget.style.borderColor = "var(--sunset-orange)";
                  }}
                  onBlur={(e) => {
                    e.currentTarget.style.borderColor = "var(--deep-tech-blue)";
                  }}
                />
              </div>

              <div className="space-y-2">
                <Label htmlFor="email">Email *</Label>
                <Input
                  id="email"
                  type="email"
                  value={formData.email}
                  onChange={(e) => handleInputChange("email", e.target.value)}
                  required
                  placeholder="john@example.com"
                  className="transition-all"
                  style={{ borderColor: "var(--deep-tech-blue)" }}
                  onFocus={(e) => {
                    e.currentTarget.style.borderColor = "var(--sunset-orange)";
                  }}
                  onBlur={(e) => {
                    e.currentTarget.style.borderColor = "var(--deep-tech-blue)";
                  }}
                />
              </div>
            </div>

            <div className="space-y-2">
              <Label htmlFor="company">Company / Organization (Optional)</Label>
              <Input
                id="company"
                value={formData.company}
                onChange={(e) => handleInputChange("company", e.target.value)}
                placeholder="Your Company Name"
                className="transition-all"
                style={{ borderColor: "var(--deep-tech-blue)" }}
                onFocus={(e) => {
                  e.currentTarget.style.borderColor = "var(--sunset-orange)";
                }}
                onBlur={(e) => {
                  e.currentTarget.style.borderColor = "var(--deep-tech-blue)";
                }}
              />
            </div>

            <div className="space-y-2">
              <Label htmlFor="subject">Subject *</Label>
              <Select
                value={formData.subject}
                onValueChange={(value) => handleInputChange("subject", value)}
                required
              >
                <SelectTrigger
                  id="subject"
                  className="transition-all"
                  style={{ borderColor: "var(--deep-tech-blue)" }}
                >
                  <SelectValue placeholder="What is this regarding?" />
                </SelectTrigger>
                <SelectContent>
                  <SelectItem value="consultancy">Consultancy & Advisory</SelectItem>
                  <SelectItem value="speaking">Speaking Engagement</SelectItem>
                  <SelectItem value="collaboration">Content Collaboration</SelectItem>
                  <SelectItem value="media">Media & Press</SelectItem>
                  <SelectItem value="book">Book Inquiry</SelectItem>
                  <SelectItem value="general">General Inquiry</SelectItem>
                  <SelectItem value="other">Other</SelectItem>
                </SelectContent>
              </Select>
            </div>

            <div className="space-y-2">
              <Label htmlFor="message">Message *</Label>
              <Textarea
                id="message"
                value={formData.message}
                onChange={(e) => handleInputChange("message", e.target.value)}
                required
                placeholder="Tell me more about what you have in mind..."
                rows={6}
                className="transition-all resize-none"
                style={{ borderColor: "var(--deep-tech-blue)" }}
                onFocus={(e) => {
                  e.currentTarget.style.borderColor = "var(--sunset-orange)";
                }}
                onBlur={(e) => {
                  e.currentTarget.style.borderColor = "var(--deep-tech-blue)";
                }}
              />
            </div>

            <Button
              type="submit"
              size="lg"
              disabled={isSubmitted}
              className="w-full transition-all"
              style={{
                backgroundColor: isSubmitted
                  ? "var(--warm-ember)"
                  : "var(--sunset-orange)",
                color: "white",
              }}
            >
              {isSubmitted ? (
                <>
                  <CheckCircle className="mr-2" size={18} />
                  Message Sent!
                </>
              ) : (
                "Send Message"
              )}
            </Button>

            <p className="text-sm text-gray-500 text-center">
              I typically respond within 24-48 hours. Looking forward to connecting!
            </p>
          </form>
        </motion.div>

        {/* Additional Contact Info */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6, delay: 0.8 }}
          className="mt-12 text-center"
        >
          <p className="text-gray-600 mb-4">
            Prefer email directly? Reach me at{" "}
            <a
              href="mailto:hello@example.com"
              className="transition-colors"
              style={{ color: "var(--sunset-orange)" }}
            >
              hello@example.com
            </a>
          </p>
          <p className="text-sm text-gray-500">
            I read every message personally and look forward to hearing from you.
          </p>
        </motion.div>
      </div>
    </section>
  );
}
