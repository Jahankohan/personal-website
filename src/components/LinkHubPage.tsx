import { useRef } from "react";
import { motion, useInView } from "motion/react";
import { Card, CardContent } from "./ui/card";
import { Button } from "./ui/button";
import { Badge } from "./ui/badge";
import {
  BookOpen,
  Globe,
  Mail,
  Youtube,
  Twitter,
  Linkedin,
  Instagram,
  Github,
  Download,
  Sparkles,
  ExternalLink,
  FileText,
  Calendar,
  Newspaper
} from "lucide-react";
import { ImageWithFallback } from "./figma/ImageWithFallback";

interface LinkItem {
  title: string;
  description?: string;
  url: string;
  icon: React.ElementType;
  color: string;
  external?: boolean;
}

export function LinkHubPage() {
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true, amount: 0.1 });

  const mainLinks: LinkItem[] = [
    {
      title: "Read My Book",
      description: "Discover 'The Human Algorithm' and get a free chapter",
      url: "#book-detail",
      icon: BookOpen,
      color: "var(--sunset-orange)"
    },
    {
      title: "Visit My Website",
      description: "Explore my full portfolio and blog",
      url: "#",
      icon: Globe,
      color: "var(--deep-tech-blue)"
    },
    {
      title: "Free Resources Library",
      description: "Tools, templates, and guides for tech leaders",
      url: "#resources",
      icon: FileText,
      color: "var(--electric-cyan)"
    },
    {
      title: "Read My Blog",
      description: "Insights on AI, blockchain, and human-centered tech",
      url: "#blog",
      icon: Newspaper,
      color: "var(--neural-purple)"
    },
    {
      title: "Get in Touch",
      description: "Consultancy, speaking, collaborations, or just say hello",
      url: "#contact",
      icon: Calendar,
      color: "var(--warm-ember)"
    },
    {
      title: "Subscribe to Newsletter",
      description: "Weekly insights delivered to your inbox",
      url: "#contact",
      icon: Mail,
      color: "var(--deep-tech-blue)"
    }
  ];

  const socialLinks = [
    {
      name: "Twitter",
      icon: Twitter,
      url: "https://twitter.com",
      color: "#1DA1F2"
    },
    {
      name: "LinkedIn",
      icon: Linkedin,
      url: "https://linkedin.com",
      color: "#0077B5"
    },
    {
      name: "YouTube",
      icon: Youtube,
      url: "https://youtube.com",
      color: "#FF0000"
    },
    {
      name: "Instagram",
      icon: Instagram,
      url: "https://instagram.com",
      color: "#E4405F"
    },
    {
      name: "GitHub",
      icon: Github,
      url: "https://github.com",
      color: "#333333"
    }
  ];

  return (
    <div
      ref={ref}
      className="min-h-screen py-12 sm:py-20"
      style={{
        background: "linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%)"
      }}
    >
      <div className="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        {/* Header Section */}
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.8 }}
          className="text-center mb-8"
        >
          {/* Avatar with Glow */}
          <motion.div
            initial={{ opacity: 0, scale: 0.8 }}
            animate={isInView ? { opacity: 1, scale: 1 } : {}}
            transition={{ duration: 0.8, delay: 0.2 }}
            className="relative inline-block mb-6"
          >
            <div
              className="absolute inset-0 rounded-full blur-3xl opacity-40"
              style={{
                background: "radial-gradient(circle, var(--electric-cyan) 0%, var(--neural-purple) 100%)"
              }}
            />
            <motion.div
              animate={{
                scale: [1, 1.05, 1],
              }}
              transition={{
                duration: 4,
                repeat: Infinity,
                ease: "easeInOut"
              }}
              className="relative"
            >
              <ImageWithFallback
                src="https://images.unsplash.com/photo-1576558656222-ba66febe3dec?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBoZWFkc2hvdCUyMHBvcnRyYWl0fGVufDF8fHx8MTc1OTM4OTAyNHww&ixlib=rb-4.1.0&q=80&w=1080"
                alt="Profile"
                className="w-32 h-32 sm:w-40 sm:h-40 rounded-full object-cover border-4 border-white shadow-2xl"
              />
            </motion.div>
          </motion.div>

          {/* Name & Tagline */}
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={isInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.6, delay: 0.4 }}
          >
            <h1
              className="mb-3 text-3xl sm:text-4xl tracking-tight"
              style={{ color: "var(--deep-tech-blue)" }}
            >
              Your Name Here
            </h1>
            <p className="text-lg text-gray-600 mb-4">
              Author | Tech Consultant | Future Builder
            </p>
            <div className="flex items-center justify-center gap-2 flex-wrap">
              <Badge
                className="text-white"
                style={{ backgroundColor: "var(--electric-cyan)" }}
              >
                <Sparkles size={14} className="mr-1" />
                AI & Blockchain Expert
              </Badge>
              <Badge
                className="text-white"
                style={{ backgroundColor: "var(--neural-purple)" }}
              >
                Remote Dad
              </Badge>
            </div>
          </motion.div>
        </motion.div>

        {/* About Me */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6, delay: 0.5 }}
          className="text-center mb-10"
        >
          <p className="text-gray-700 text-lg max-w-xl mx-auto leading-relaxed">
            Hi, I'm bridging the gap between emerging technologies and human values. 
            I explore how AI and blockchain can amplify what makes us human—not replace it.
          </p>
        </motion.div>

        {/* Featured Resource Card */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6, delay: 0.6 }}
          className="mb-8"
        >
          <Card
            className="overflow-hidden border-2 hover:shadow-2xl transition-all duration-300 cursor-pointer"
            style={{ borderColor: "var(--warm-ember)" }}
            onClick={() => window.location.hash = "book-detail"}
          >
            <div
              className="h-2"
              style={{
                background: "linear-gradient(90deg, var(--warm-ember) 0%, var(--sunset-orange) 100%)"
              }}
            />
            <CardContent className="p-6">
              <div className="flex items-start gap-4">
                <div
                  className="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center"
                  style={{ backgroundColor: "var(--warm-ember)" }}
                >
                  <Sparkles size={24} className="text-white" />
                </div>
                <div className="flex-1">
                  <Badge
                    className="mb-2 text-xs"
                    style={{
                      backgroundColor: "var(--warm-ember)",
                      color: "white"
                    }}
                  >
                    🔥 FEATURED
                  </Badge>
                  <h3
                    className="mb-2 text-xl"
                    style={{ color: "var(--deep-tech-blue)" }}
                  >
                    New Book: The Human Algorithm
                  </h3>
                  <p className="text-gray-600 mb-3">
                    Discover how to harness AI and blockchain to amplify human potential. 
                    Download the first chapter free!
                  </p>
                  <div className="flex items-center gap-2">
                    <Download size={16} style={{ color: "var(--sunset-orange)" }} />
                    <span
                      className="text-sm"
                      style={{ color: "var(--sunset-orange)" }}
                    >
                      Free Sample Chapter Available
                    </span>
                  </div>
                </div>
              </div>
            </CardContent>
          </Card>
        </motion.div>

        {/* Main Links */}
        <motion.div
          initial={{ opacity: 0 }}
          animate={isInView ? { opacity: 1 } : {}}
          transition={{ duration: 0.6, delay: 0.7 }}
          className="space-y-4 mb-10"
        >
          {mainLinks.map((link, index) => {
            const Icon = link.icon;
            return (
              <motion.div
                key={link.title}
                initial={{ opacity: 0, x: -20 }}
                animate={isInView ? { opacity: 1, x: 0 } : {}}
                transition={{ duration: 0.5, delay: 0.7 + index * 0.1 }}
              >
                <Button
                  onClick={() => {
                    if (link.external) {
                      window.open(link.url, "_blank");
                    } else {
                      window.location.hash = link.url.replace("#", "");
                    }
                  }}
                  className="w-full h-auto py-5 px-6 rounded-2xl hover:scale-[1.02] transition-all duration-300 shadow-lg hover:shadow-xl"
                  style={{
                    backgroundColor: "white",
                    color: link.color,
                    border: `2px solid ${link.color}`
                  }}
                >
                  <div className="flex items-center gap-4 w-full">
                    <div
                      className="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center"
                      style={{ backgroundColor: link.color }}
                    >
                      <Icon size={24} className="text-white" />
                    </div>
                    <div className="flex-1 text-left">
                      <p
                        className="text-lg mb-1"
                        style={{ color: "var(--deep-tech-blue)" }}
                      >
                        {link.title}
                      </p>
                      {link.description && (
                        <p className="text-sm text-gray-600">
                          {link.description}
                        </p>
                      )}
                    </div>
                    {link.external ? (
                      <ExternalLink size={20} className="flex-shrink-0 text-gray-400" />
                    ) : (
                      <motion.div
                        animate={{ x: [0, 5, 0] }}
                        transition={{ duration: 1.5, repeat: Infinity }}
                      >
                        <ExternalLink size={20} className="flex-shrink-0 text-gray-400" />
                      </motion.div>
                    )}
                  </div>
                </Button>
              </motion.div>
            );
          })}
        </motion.div>

        {/* Social Links */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6, delay: 1.2 }}
          className="text-center"
        >
          <p className="text-gray-600 mb-4">Connect with me</p>
          <div className="flex items-center justify-center gap-4 flex-wrap mb-8">
            {socialLinks.map((social, index) => {
              const Icon = social.icon;
              return (
                <motion.a
                  key={social.name}
                  href={social.url}
                  target="_blank"
                  rel="noopener noreferrer"
                  initial={{ opacity: 0, scale: 0.8 }}
                  animate={isInView ? { opacity: 1, scale: 1 } : {}}
                  transition={{ duration: 0.5, delay: 1.3 + index * 0.1 }}
                  whileHover={{ scale: 1.1, y: -2 }}
                  whileTap={{ scale: 0.95 }}
                  className="w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300"
                  style={{ backgroundColor: social.color }}
                  aria-label={social.name}
                >
                  <Icon size={24} className="text-white" />
                </motion.a>
              );
            })}
          </div>

          {/* Footer Bio */}
          <motion.div
            initial={{ opacity: 0 }}
            animate={isInView ? { opacity: 1 } : {}}
            transition={{ duration: 0.6, delay: 1.5 }}
          >
            <p className="text-gray-500 text-sm mb-2">
              Building a future where technology amplifies humanity ✨
            </p>
            <p className="text-gray-400 text-xs">
              © {new Date().getFullYear()} All rights reserved.
            </p>
          </motion.div>
        </motion.div>

        {/* Back to Home Link */}
        <motion.div
          initial={{ opacity: 0 }}
          animate={isInView ? { opacity: 1 } : {}}
          transition={{ duration: 0.6, delay: 1.6 }}
          className="text-center mt-8"
        >
          <button
            onClick={() => window.location.hash = ""}
            className="text-sm text-gray-500 hover:text-gray-700 transition-colors inline-flex items-center gap-2"
          >
            <Globe size={16} />
            Visit Full Website
          </button>
        </motion.div>
      </div>

      {/* Decorative Background Elements */}
      <div className="fixed inset-0 pointer-events-none overflow-hidden -z-10">
        <motion.div
          animate={{
            scale: [1, 1.2, 1],
            rotate: [0, 90, 0],
          }}
          transition={{
            duration: 20,
            repeat: Infinity,
            ease: "linear"
          }}
          className="absolute top-20 left-10 w-64 h-64 rounded-full opacity-5"
          style={{ backgroundColor: "var(--electric-cyan)" }}
        />
        <motion.div
          animate={{
            scale: [1.2, 1, 1.2],
            rotate: [90, 0, 90],
          }}
          transition={{
            duration: 25,
            repeat: Infinity,
            ease: "linear"
          }}
          className="absolute bottom-20 right-10 w-80 h-80 rounded-full opacity-5"
          style={{ backgroundColor: "var(--neural-purple)" }}
        />
        <motion.div
          animate={{
            y: [0, 50, 0],
          }}
          transition={{
            duration: 15,
            repeat: Infinity,
            ease: "easeInOut"
          }}
          className="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full opacity-5"
          style={{ backgroundColor: "var(--warm-ember)" }}
        />
      </div>
    </div>
  );
}