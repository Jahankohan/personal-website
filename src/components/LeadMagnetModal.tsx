import { useState, useEffect } from "react";
import { motion, AnimatePresence } from "motion/react";
import { Dialog, DialogContent, DialogHeader, DialogTitle, DialogDescription } from "./ui/dialog";
import { Button } from "./ui/button";
import { Input } from "./ui/input";
import { Label } from "./ui/label";
import { Checkbox } from "./ui/checkbox";
import { X, Mail, BookOpen, FileText, Newspaper, Lightbulb, CheckCircle } from "lucide-react";

interface LeadMagnetModalProps {
  isOpen: boolean;
  onClose: () => void;
}

export function LeadMagnetModal({ isOpen, onClose }: LeadMagnetModalProps) {
  const [email, setEmail] = useState("");
  const [selectedTopics, setSelectedTopics] = useState<string[]>(["all"]);
  const [isSubmitted, setIsSubmitted] = useState(false);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setIsSubmitted(true);
    setTimeout(() => {
      setEmail("");
      setSelectedTopics(["all"]);
      setIsSubmitted(false);
      onClose();
    }, 2000);
  };

  const handleTopicToggle = (topicId: string) => {
    if (topicId === "all") {
      // If "all" is selected, deselect everything else
      setSelectedTopics(["all"]);
    } else {
      // Remove "all" if it's selected and add the new topic
      const newTopics = selectedTopics.filter(t => t !== "all");
      
      if (selectedTopics.includes(topicId)) {
        // Remove the topic
        const filtered = newTopics.filter(t => t !== topicId);
        // If nothing is left, select "all"
        setSelectedTopics(filtered.length === 0 ? ["all"] : filtered);
      } else {
        // Add the topic
        setSelectedTopics([...newTopics, topicId]);
      }
    }
  };

  const topics = [
    {
      id: "all",
      icon: Mail,
      title: "All Content",
      description: "Get everything - blog posts, book updates, resources, and insights",
      color: "var(--deep-tech-blue)",
    },
    {
      id: "blog",
      icon: Newspaper,
      title: "Blog Posts",
      description: "Weekly articles on AI, blockchain, and emerging technologies",
      color: "var(--neural-purple)",
    },
    {
      id: "book",
      icon: BookOpen,
      title: "Book Updates",
      description: "Exclusive chapters, launch updates, and pre-order opportunities",
      color: "var(--sunset-orange)",
    },
    {
      id: "resources",
      icon: FileText,
      title: "Free Resources",
      description: "Templates, guides, and tools for tech leaders",
      color: "var(--electric-cyan)",
    },
    {
      id: "insights",
      icon: Lightbulb,
      title: "Industry Insights",
      description: "Curated trends, analysis, and thought leadership pieces",
      color: "var(--warm-ember)",
    },
  ];

  return (
    <Dialog open={isOpen} onOpenChange={onClose}>
      <DialogContent className="sm:max-w-2xl max-h-[90vh] overflow-y-auto">
        <DialogHeader>
          <DialogTitle
            className="text-2xl tracking-tight"
            style={{ color: "var(--deep-tech-blue)" }}
          >
            Subscribe to My Newsletter
          </DialogTitle>
          <DialogDescription>
            Stay updated with the latest insights on AI, blockchain, and human-centered technology. 
            Choose the topics that interest you most.
          </DialogDescription>
        </DialogHeader>

        {!isSubmitted ? (
          <form onSubmit={handleSubmit} className="space-y-6">
            <div>
              <Label className="mb-4 block">What would you like to receive?</Label>
              <div className="space-y-3">
                {topics.map((topic) => (
                  <div
                    key={topic.id}
                    className="flex items-start space-x-3 p-4 rounded-lg border transition-all cursor-pointer hover:shadow-md"
                    style={{
                      borderColor: selectedTopics.includes(topic.id)
                        ? topic.color
                        : "var(--border)",
                      backgroundColor: selectedTopics.includes(topic.id)
                        ? `${topic.color}08`
                        : "transparent",
                    }}
                    onClick={() => handleTopicToggle(topic.id)}
                  >
                    <Checkbox
                      checked={selectedTopics.includes(topic.id)}
                      onCheckedChange={() => handleTopicToggle(topic.id)}
                      id={topic.id}
                      className="mt-1"
                    />
                    <div className="flex-1">
                      <div className="flex items-center gap-2 mb-1">
                        <topic.icon
                          size={18}
                          style={{ color: topic.color }}
                        />
                        <Label
                          htmlFor={topic.id}
                          className="cursor-pointer"
                          style={{ color: "var(--deep-tech-blue)" }}
                        >
                          {topic.title}
                        </Label>
                      </div>
                      <p className="text-sm text-gray-600">
                        {topic.description}
                      </p>
                    </div>
                  </div>
                ))}
              </div>
            </div>

            <div className="space-y-2">
              <Label htmlFor="newsletter-email">Email Address *</Label>
              <Input
                id="newsletter-email"
                type="email"
                value={email}
                onChange={(e) => setEmail(e.target.value)}
                required
                placeholder="your@email.com"
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

            <Button
              type="submit"
              size="lg"
              className="w-full"
              disabled={selectedTopics.length === 0}
              style={{
                backgroundColor: "var(--sunset-orange)",
                color: "white",
              }}
            >
              Subscribe Now
            </Button>

            <p className="text-xs text-gray-500 text-center">
              You can update your preferences or unsubscribe anytime. 
              I respect your inbox and only send valuable content.
            </p>
          </form>
        ) : (
          <motion.div
            initial={{ opacity: 0, scale: 0.9 }}
            animate={{ opacity: 1, scale: 1 }}
            className="py-8 text-center"
          >
            <div
              className="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
              style={{ backgroundColor: "var(--warm-ember)" }}
            >
              <CheckCircle className="text-white" size={32} />
            </div>
            <h3
              className="mb-2"
              style={{ color: "var(--deep-tech-blue)" }}
            >
              Welcome Aboard!
            </h3>
            <p className="text-gray-600">
              Check your email at {email} to confirm your subscription.
            </p>
          </motion.div>
        )}
      </DialogContent>
    </Dialog>
  );
}

export function LeadMagnetBanner() {
  const [isModalOpen, setIsModalOpen] = useState(false);
  const [isVisible, setIsVisible] = useState(false);

  useEffect(() => {
    const timer = setTimeout(() => {
      setIsVisible(true);
    }, 5000); // Show after 5 seconds

    return () => clearTimeout(timer);
  }, []);

  const handleClose = () => {
    setIsVisible(false);
  };

  return (
    <>
      <AnimatePresence>
        {isVisible && (
          <motion.div
            initial={{ y: 100, opacity: 0 }}
            animate={{ y: 0, opacity: 1 }}
            exit={{ y: 100, opacity: 0 }}
            className="fixed bottom-6 left-6 z-40 max-w-sm"
          >
            <div
              className="p-6 rounded-xl shadow-2xl relative"
              style={{
                background: "linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple))",
              }}
            >
              <button
                onClick={handleClose}
                className="absolute top-3 right-3 text-white/80 hover:text-white transition-colors"
                aria-label="Close"
              >
                <X size={20} />
              </button>

              <Mail className="text-white mb-3" size={32} />

              <h4 className="text-white mb-2">
                Join My Newsletter
              </h4>

              <p className="text-white/90 text-sm mb-4">
                Get exclusive insights on AI, blockchain, and emerging tech. 
                Choose what you want to receive.
              </p>

              <Button
                onClick={() => setIsModalOpen(true)}
                className="w-full"
                style={{
                  backgroundColor: "var(--sunset-orange)",
                  color: "white",
                }}
              >
                Subscribe Now
              </Button>
            </div>
          </motion.div>
        )}
      </AnimatePresence>

      <LeadMagnetModal
        isOpen={isModalOpen}
        onClose={() => setIsModalOpen(false)}
      />
    </>
  );
}
