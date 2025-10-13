import { useRef, useState } from "react";
import { motion, useInView } from "motion/react";
import { Button } from "./ui/button";
import { Input } from "./ui/input";
import { Textarea } from "./ui/textarea";
import { Label } from "./ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "./ui/select";
import { Calendar, Clock, MessageSquare, CheckCircle } from "lucide-react";

export function ConsultancySection() {
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true, amount: 0.3 });
  const [isSubmitted, setIsSubmitted] = useState(false);

  const [formData, setFormData] = useState({
    name: "",
    email: "",
    company: "",
    sessionType: "",
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
        sessionType: "",
        message: "",
      });
      setIsSubmitted(false);
    }, 3000);
  };

  const handleInputChange = (field: string, value: string) => {
    setFormData(prev => ({ ...prev, [field]: value }));
  };

  const services = [
    {
      icon: MessageSquare,
      title: "Strategy Sessions",
      description: "1-on-1 consultation on AI and blockchain implementation strategies",
      duration: "60 minutes",
    },
    {
      icon: Calendar,
      title: "Workshop Facilitation",
      description: "Team workshops on emerging tech adoption and digital transformation",
      duration: "Half/Full day",
    },
    {
      icon: Clock,
      title: "Advisory Retainer",
      description: "Ongoing strategic guidance for your organization's tech journey",
      duration: "Monthly",
    },
  ];

  return (
    <section id="consultancy" ref={ref} className="py-24 bg-gray-50">
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
            Book a Consultation
          </h2>
          <div
            className="w-24 h-1 mx-auto mb-6"
            style={{ backgroundColor: "var(--warm-ember)" }}
          />
          <p className="text-xl max-w-3xl mx-auto text-gray-700">
            Let's explore how emerging technologies can transform your business
            while keeping humanity at the center.
          </p>
        </motion.div>

        <div className="grid lg:grid-cols-3 gap-8 mb-12">
          {services.map((service, index) => (
            <motion.div
              key={service.title}
              initial={{ opacity: 0, y: 30 }}
              animate={isInView ? { opacity: 1, y: 0 } : {}}
              transition={{ duration: 0.6, delay: 0.2 + index * 0.1 }}
              className="bg-white p-6 rounded-xl shadow-lg"
            >
              <div
                className="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                style={{ backgroundColor: "var(--deep-tech-blue)" }}
              >
                <service.icon className="text-white" size={24} />
              </div>
              <h3
                className="mb-2"
                style={{ color: "var(--deep-tech-blue)" }}
              >
                {service.title}
              </h3>
              <p className="text-gray-600 mb-3">{service.description}</p>
              <div
                className="text-sm"
                style={{ color: "var(--warm-ember)" }}
              >
                {service.duration}
              </div>
            </motion.div>
          ))}
        </div>

        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6, delay: 0.5 }}
          className="bg-white p-8 md:p-12 rounded-2xl shadow-xl max-w-3xl mx-auto"
        >
          <h3
            className="mb-8 text-2xl text-center tracking-tight"
            style={{ color: "var(--deep-tech-blue)" }}
          >
            Schedule Your Session
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
              <Label htmlFor="company">Company / Organization</Label>
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
              <Label htmlFor="sessionType">Session Type *</Label>
              <Select
                value={formData.sessionType}
                onValueChange={(value) => handleInputChange("sessionType", value)}
                required
              >
                <SelectTrigger
                  id="sessionType"
                  className="transition-all"
                  style={{ borderColor: "var(--deep-tech-blue)" }}
                >
                  <SelectValue placeholder="Select a session type" />
                </SelectTrigger>
                <SelectContent>
                  <SelectItem value="strategy">Strategy Session (60 min)</SelectItem>
                  <SelectItem value="workshop">Workshop Facilitation</SelectItem>
                  <SelectItem value="retainer">Advisory Retainer</SelectItem>
                  <SelectItem value="other">Other / Custom</SelectItem>
                </SelectContent>
              </Select>
            </div>

            <div className="space-y-2">
              <Label htmlFor="message">Tell me about your needs *</Label>
              <Textarea
                id="message"
                value={formData.message}
                onChange={(e) => handleInputChange("message", e.target.value)}
                required
                placeholder="What challenges are you facing? What are you hoping to achieve?"
                rows={5}
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
                  Request Submitted!
                </>
              ) : (
                "Submit Booking Request"
              )}
            </Button>

            <p className="text-sm text-gray-500 text-center">
              I'll review your request and get back to you within 24 hours to
              schedule our session.
            </p>
          </form>
        </motion.div>
      </div>
    </section>
  );
}
