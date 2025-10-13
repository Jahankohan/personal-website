import { useState, useRef } from "react";
import { motion, useInView } from "motion/react";
import { Button } from "./ui/button";
import { Input } from "./ui/input";
import { Badge } from "./ui/badge";
import { Card, CardContent } from "./ui/card";
import { Separator } from "./ui/separator";
import {
  Download,
  CheckCircle2,
  ArrowRight,
  Book,
  Quote,
  Star,
  Sparkles,
  ChevronRight,
  Mail,
  User,
  Shield
} from "lucide-react";
import { ImageWithFallback } from "./figma/ImageWithFallback";

export function BookDetailPage() {
  const [email, setEmail] = useState("");
  const [name, setName] = useState("");
  const [isSubmitted, setIsSubmitted] = useState(false);

  const heroRef = useRef(null);
  const aboutRef = useRef(null);
  const whyRef = useRef(null);
  const authorRef = useRef(null);
  const socialRef = useRef(null);
  const ctaRef = useRef(null);
  const sneakRef = useRef(null);

  const isHeroInView = useInView(heroRef, { once: true, amount: 0.2 });
  const isAboutInView = useInView(aboutRef, { once: true, amount: 0.3 });
  const isWhyInView = useInView(whyRef, { once: true, amount: 0.3 });
  const isAuthorInView = useInView(authorRef, { once: true, amount: 0.3 });
  const isSocialInView = useInView(socialRef, { once: true, amount: 0.3 });
  const isCtaInView = useInView(ctaRef, { once: true, amount: 0.3 });
  const isSneakInView = useInView(sneakRef, { once: true, amount: 0.3 });

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    if (email && name) {
      setIsSubmitted(true);
      // Simulate download
      setTimeout(() => {
        alert("Sample chapter downloading... Check your email!");
      }, 500);
    }
  };

  const keyTakeaways = [
    "Understand how AI and blockchain converge to create new possibilities",
    "Learn practical frameworks for implementing emerging tech in your organization",
    "Discover how to maintain human connection in an automated world",
    "Navigate the ethical considerations of technological advancement",
    "Build a future-ready mindset while staying grounded in human values"
  ];

  const testimonials = [
    {
      name: "Dr. Sarah Chen",
      role: "Chief Innovation Officer, TechCorp",
      quote: "This book bridges the gap between futuristic vision and practical implementation. A must-read for any tech leader.",
      avatar: "https://images.unsplash.com/photo-1581065178047-8ee15951ede6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBwb3J0cmFpdHxlbnwxfHx8fDE3NTkzMTQ4MTh8MA&ixlib=rb-4.1.0&q=80&w=1080"
    },
    {
      name: "Marcus Rodriguez",
      role: "Blockchain Architect",
      quote: "Finally, a book that doesn't just hype technology but shows us how to use it responsibly and effectively.",
      avatar: "https://images.unsplash.com/photo-1581065178047-8ee15951ede6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBwb3J0cmFpdHxlbnwxfHx8fDE3NTkzMTQ4MTh8MA&ixlib=rb-4.1.0&q=80&w=1080"
    },
    {
      name: "Emily Watson",
      role: "Product Designer, StartupXYZ",
      quote: "The human-centered approach in this book has transformed how I think about building products with emerging tech.",
      avatar: "https://images.unsplash.com/photo-1581065178047-8ee15951ede6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBwb3J0cmFpdHxlbnwxfHx8fDE3NTkzMTQ4MTh8MA&ixlib=rb-4.1.0&q=80&w=1080"
    }
  ];

  const chapterPreviews = [
    "Chapter 1: The Convergence Point - Where AI Meets Blockchain",
    "Chapter 2: Human-Centered Technology Design",
    "Chapter 3: Building Trust in Decentralized Systems",
    "Chapter 4: The Ethics of Automation",
    "Chapter 5: Practical Implementation Frameworks"
  ];

  return (
    <div className="min-h-screen bg-white">
      {/* Hero Section */}
      <section
        ref={heroRef}
        className="relative min-h-screen flex items-center justify-center overflow-hidden py-20"
        style={{
          background: "linear-gradient(135deg, var(--deep-tech-blue) 0%, var(--neural-purple) 100%)"
        }}
      >
        {/* Decorative Elements */}
        <div className="absolute inset-0 overflow-hidden">
          <div className="absolute top-20 left-10 w-72 h-72 bg-white/5 rounded-full blur-3xl" />
          <div className="absolute bottom-20 right-10 w-96 h-96 bg-white/5 rounded-full blur-3xl" />
          <div className="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-electric-cyan/10 to-warm-ember/10 rounded-full blur-3xl" />
        </div>

        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
          <div className="grid lg:grid-cols-2 gap-12 items-center">
            {/* Left: Text Content */}
            <motion.div
              initial={{ opacity: 0, x: -50 }}
              animate={isHeroInView ? { opacity: 1, x: 0 } : {}}
              transition={{ duration: 0.8 }}
              className="text-white"
            >
              <motion.div
                initial={{ opacity: 0, y: 20 }}
                animate={isHeroInView ? { opacity: 1, y: 0 } : {}}
                transition={{ duration: 0.6, delay: 0.2 }}
                className="mb-6"
              >
                <Badge
                  className="mb-4 text-white border-white/30"
                  style={{ backgroundColor: "rgba(255, 255, 255, 0.1)" }}
                >
                  <Sparkles size={14} className="mr-1" />
                  Coming Soon 2026
                </Badge>
              </motion.div>

              <motion.h1
                initial={{ opacity: 0, y: 20 }}
                animate={isHeroInView ? { opacity: 1, y: 0 } : {}}
                transition={{ duration: 0.6, delay: 0.3 }}
                className="text-4xl sm:text-5xl lg:text-6xl tracking-tight mb-6"
              >
                A New Perspective on
                <span
                  className="block mt-2"
                  style={{ color: "var(--electric-cyan)" }}
                >
                  Technology & Humanity
                </span>
              </motion.h1>

              <motion.p
                initial={{ opacity: 0, y: 20 }}
                animate={isHeroInView ? { opacity: 1, y: 0 } : {}}
                transition={{ duration: 0.6, delay: 0.4 }}
                className="text-xl text-white/90 mb-8 max-w-xl"
              >
                Discover how to harness AI and blockchain to amplify human potential—without losing sight of what makes us human.
              </motion.p>

              <motion.div
                initial={{ opacity: 0, y: 20 }}
                animate={isHeroInView ? { opacity: 1, y: 0 } : {}}
                transition={{ duration: 0.6, delay: 0.5 }}
                className="flex flex-col sm:flex-row gap-4"
              >
                <Button
                  size="lg"
                  className="text-white text-lg h-14 px-8"
                  style={{ backgroundColor: "var(--sunset-orange)" }}
                  onClick={() => {
                    const ctaSection = document.getElementById("download-cta");
                    ctaSection?.scrollIntoView({ behavior: "smooth" });
                  }}
                >
                  <Download className="mr-2" size={20} />
                  Download Free Sample Chapter
                </Button>
                <Button
                  size="lg"
                  variant="outline"
                  className="text-white border-white/30 hover:bg-white/10 text-lg h-14 px-8"
                  onClick={() => {
                    const aboutSection = document.getElementById("about-book");
                    aboutSection?.scrollIntoView({ behavior: "smooth" });
                  }}
                >
                  Learn More
                  <ArrowRight className="ml-2" size={20} />
                </Button>
              </motion.div>

              <motion.div
                initial={{ opacity: 0 }}
                animate={isHeroInView ? { opacity: 1 } : {}}
                transition={{ duration: 0.6, delay: 0.6 }}
                className="mt-8 flex items-center gap-6 text-white/80"
              >
                <div className="flex items-center gap-2">
                  <Book size={20} />
                  <span>250+ Pages</span>
                </div>
                <div className="flex items-center gap-2">
                  <Star size={20} style={{ color: "var(--warm-ember)" }} />
                  <span>Pre-order Now</span>
                </div>
              </motion.div>
            </motion.div>

            {/* Right: Book Cover */}
            <motion.div
              initial={{ opacity: 0, x: 50 }}
              animate={isHeroInView ? { opacity: 1, x: 0 } : {}}
              transition={{ duration: 0.8, delay: 0.2 }}
              className="flex justify-center"
            >
              <div className="relative">
                <div
                  className="absolute inset-0 blur-3xl opacity-50"
                  style={{ background: "var(--electric-cyan)" }}
                />
                <motion.div
                  animate={{
                    y: [0, -20, 0],
                  }}
                  transition={{
                    duration: 6,
                    repeat: Infinity,
                    ease: "easeInOut"
                  }}
                  className="relative"
                >
                  <ImageWithFallback
                    src="https://images.unsplash.com/photo-1668713447978-1e47fcfeff4d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxib29rJTIwY292ZXIlMjB0ZWNobm9sb2d5fGVufDF8fHx8MTc1OTQwMzE4NXww&ixlib=rb-4.1.0&q=80&w=1080"
                    alt="Book Cover"
                    className="w-full max-w-md h-auto rounded-2xl shadow-2xl"
                  />
                </motion.div>
              </div>
            </motion.div>
          </div>
        </div>
      </section>

      {/* About the Book */}
      <section ref={aboutRef} id="about-book" className="py-20 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-2 gap-12 items-center">
            <motion.div
              initial={{ opacity: 0, x: -30 }}
              animate={isAboutInView ? { opacity: 1, x: 0 } : {}}
              transition={{ duration: 0.8 }}
            >
              <h2
                className="mb-6 text-4xl tracking-tight"
                style={{ color: "var(--deep-tech-blue)" }}
              >
                About the Book
              </h2>
              
              <div
                className="w-24 h-1 mb-8"
                style={{ backgroundColor: "var(--warm-ember)" }}
              />

              <p className="text-xl text-gray-700 mb-6 leading-relaxed">
                In an era where artificial intelligence and blockchain are reshaping every industry, we face a critical question: How do we build a technological future that enhances rather than replaces human connection?
              </p>

              <p className="text-lg text-gray-600 mb-8 leading-relaxed">
                This book is your guide to navigating the intersection of emerging technologies and timeless human values. Drawing from real-world experience in AI implementation, blockchain development, and human-centered design, it offers practical frameworks for leaders, innovators, and anyone curious about shaping a better technological future.
              </p>

              {/* Quote Highlight */}
              <Card className="border-l-4 bg-white" style={{ borderLeftColor: "var(--electric-cyan)" }}>
                <CardContent className="p-6">
                  <Quote className="mb-4" size={32} style={{ color: "var(--electric-cyan)" }} />
                  <p className="text-lg italic text-gray-700 mb-4">
                    "Technology should be a bridge to deeper human connection, not a barrier. This book shows you how to build that bridge."
                  </p>
                  <p className="text-sm" style={{ color: "var(--deep-tech-blue)" }}>
                    — From the Introduction
                  </p>
                </CardContent>
              </Card>
            </motion.div>

            <motion.div
              initial={{ opacity: 0, x: 30 }}
              animate={isAboutInView ? { opacity: 1, x: 0 } : {}}
              transition={{ duration: 0.8, delay: 0.2 }}
            >
              <h3 className="mb-6 text-2xl" style={{ color: "var(--deep-tech-blue)" }}>
                What You'll Discover
              </h3>

              <div className="space-y-4">
                {keyTakeaways.map((takeaway, index) => (
                  <motion.div
                    key={index}
                    initial={{ opacity: 0, x: 20 }}
                    animate={isAboutInView ? { opacity: 1, x: 0 } : {}}
                    transition={{ duration: 0.6, delay: 0.1 * index }}
                    className="flex gap-4 items-start"
                  >
                    <div
                      className="flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center mt-1"
                      style={{ backgroundColor: "var(--electric-cyan)" }}
                    >
                      <CheckCircle2 size={18} className="text-white" />
                    </div>
                    <p className="text-gray-700 flex-1">{takeaway}</p>
                  </motion.div>
                ))}
              </div>

              {/* Visual Element */}
              <motion.div
                initial={{ opacity: 0, scale: 0.9 }}
                animate={isAboutInView ? { opacity: 1, scale: 1 } : {}}
                transition={{ duration: 0.8, delay: 0.5 }}
                className="mt-8 rounded-xl overflow-hidden"
              >
                <ImageWithFallback
                  src="https://images.unsplash.com/photo-1644331064965-bce2645dd1e0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxhYnN0cmFjdCUyMGRpZ2l0YWwlMjBpbGx1c3RyYXRpb258ZW58MXx8fHwxNzU5NDAzMTg2fDA&ixlib=rb-4.1.0&q=80&w=1080"
                  alt="Abstract illustration"
                  className="w-full h-64 object-cover"
                />
              </motion.div>
            </motion.div>
          </div>
        </div>
      </section>

      {/* Why It Matters / Transformation Section */}
      <section ref={whyRef} className="py-20 bg-white">
        <div className="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
          <motion.div
            initial={{ opacity: 0, y: 30 }}
            animate={isWhyInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.8 }}
            className="text-center mb-12"
          >
            <h2
              className="mb-6 text-4xl tracking-tight"
              style={{ color: "var(--deep-tech-blue)" }}
            >
              Why This Book Matters Now
            </h2>
            <div
              className="w-24 h-1 mx-auto mb-6"
              style={{ backgroundColor: "var(--warm-ember)" }}
            />
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              If you've ever wondered how to implement cutting-edge technology without losing the human touch, this book will show you the way.
            </p>
          </motion.div>

          <div className="grid md:grid-cols-2 gap-8 mb-12">
            {/* Before */}
            <motion.div
              initial={{ opacity: 0, x: -30 }}
              animate={isWhyInView ? { opacity: 1, x: 0 } : {}}
              transition={{ duration: 0.8, delay: 0.2 }}
            >
              <Card className="h-full border-2" style={{ borderColor: "var(--muted)" }}>
                <CardContent className="p-8">
                  <div className="text-center mb-6">
                    <div
                      className="inline-flex items-center justify-center w-16 h-16 rounded-full mb-4"
                      style={{ backgroundColor: "var(--muted)" }}
                    >
                      <span className="text-2xl">😟</span>
                    </div>
                    <h3 className="text-2xl mb-2" style={{ color: "var(--deep-tech-blue)" }}>
                      The Challenge
                    </h3>
                  </div>
                  <ul className="space-y-3 text-gray-700">
                    <li className="flex items-start gap-2">
                      <ChevronRight className="flex-shrink-0 mt-1 text-gray-400" size={20} />
                      <span>Overwhelmed by the pace of technological change</span>
                    </li>
                    <li className="flex items-start gap-2">
                      <ChevronRight className="flex-shrink-0 mt-1 text-gray-400" size={20} />
                      <span>Uncertain how to implement AI and blockchain responsibly</span>
                    </li>
                    <li className="flex items-start gap-2">
                      <ChevronRight className="flex-shrink-0 mt-1 text-gray-400" size={20} />
                      <span>Worried about losing human connection in automation</span>
                    </li>
                    <li className="flex items-start gap-2">
                      <ChevronRight className="flex-shrink-0 mt-1 text-gray-400" size={20} />
                      <span>Struggling to bridge technical and ethical considerations</span>
                    </li>
                  </ul>
                </CardContent>
              </Card>
            </motion.div>

            {/* After */}
            <motion.div
              initial={{ opacity: 0, x: 30 }}
              animate={isWhyInView ? { opacity: 1, x: 0 } : {}}
              transition={{ duration: 0.8, delay: 0.4 }}
            >
              <Card
                className="h-full border-2"
                style={{ borderColor: "var(--electric-cyan)" }}
              >
                <CardContent className="p-8">
                  <div className="text-center mb-6">
                    <div
                      className="inline-flex items-center justify-center w-16 h-16 rounded-full mb-4"
                      style={{ backgroundColor: "var(--electric-cyan)" }}
                    >
                      <span className="text-2xl">🚀</span>
                    </div>
                    <h3 className="text-2xl mb-2" style={{ color: "var(--deep-tech-blue)" }}>
                      The Transformation
                    </h3>
                  </div>
                  <ul className="space-y-3 text-gray-700">
                    <li className="flex items-start gap-2">
                      <CheckCircle2
                        className="flex-shrink-0 mt-1"
                        size={20}
                        style={{ color: "var(--electric-cyan)" }}
                      />
                      <span>Confident in navigating emerging technologies</span>
                    </li>
                    <li className="flex items-start gap-2">
                      <CheckCircle2
                        className="flex-shrink-0 mt-1"
                        size={20}
                        style={{ color: "var(--electric-cyan)" }}
                      />
                      <span>Clear frameworks for ethical AI and blockchain implementation</span>
                    </li>
                    <li className="flex items-start gap-2">
                      <CheckCircle2
                        className="flex-shrink-0 mt-1"
                        size={20}
                        style={{ color: "var(--electric-cyan)" }}
                      />
                      <span>Ability to build tech that amplifies human connection</span>
                    </li>
                    <li className="flex items-start gap-2">
                      <CheckCircle2
                        className="flex-shrink-0 mt-1"
                        size={20}
                        style={{ color: "var(--electric-cyan)" }}
                      />
                      <span>A future-ready mindset grounded in human values</span>
                    </li>
                  </ul>
                </CardContent>
              </Card>
            </motion.div>
          </div>

          <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={isWhyInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.8, delay: 0.6 }}
            className="text-center"
          >
            <ImageWithFallback
              src="https://images.unsplash.com/photo-1634912889606-3a6486a1f336?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx0cmFuc2Zvcm1hdGlvbiUyMGpvdXJuZXl8ZW58MXx8fHwxNzU5NDAzMTg3fDA&ixlib=rb-4.1.0&q=80&w=1080"
              alt="Transformation journey"
              className="w-full max-w-4xl mx-auto rounded-2xl shadow-xl"
            />
          </motion.div>
        </div>
      </section>

      {/* About the Author */}
      <section ref={authorRef} className="py-20 bg-gray-50">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          <motion.div
            initial={{ opacity: 0, y: 30 }}
            animate={isAuthorInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.8 }}
          >
            <div className="grid md:grid-cols-2 gap-12 items-center">
              <motion.div
                initial={{ opacity: 0, scale: 0.9 }}
                animate={isAuthorInView ? { opacity: 1, scale: 1 } : {}}
                transition={{ duration: 0.8, delay: 0.2 }}
                className="relative"
              >
                <div
                  className="absolute inset-0 blur-2xl opacity-30 rounded-full"
                  style={{ background: "var(--neural-purple)" }}
                />
                <ImageWithFallback
                  src="https://images.unsplash.com/photo-1581065178047-8ee15951ede6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBwb3J0cmFpdHxlbnwxfHx8fDE3NTkzMTQ4MTh8MA&ixlib=rb-4.1.0&q=80&w=1080"
                  alt="Author"
                  className="relative w-full aspect-square object-cover rounded-2xl shadow-2xl"
                />
              </motion.div>

              <motion.div
                initial={{ opacity: 0, x: 30 }}
                animate={isAuthorInView ? { opacity: 1, x: 0 } : {}}
                transition={{ duration: 0.8, delay: 0.3 }}
              >
                <h2
                  className="mb-6 text-4xl tracking-tight"
                  style={{ color: "var(--deep-tech-blue)" }}
                >
                  About the Author
                </h2>
                
                <div
                  className="w-24 h-1 mb-6"
                  style={{ backgroundColor: "var(--warm-ember)" }}
                />

                <p className="text-lg text-gray-700 mb-4 leading-relaxed">
                  With over a decade of experience at the intersection of emerging technologies and human-centered design, I've helped organizations around the world implement AI and blockchain solutions that actually work—for both business and people.
                </p>

                <p className="text-lg text-gray-700 mb-4 leading-relaxed">
                  As a consultant, speaker, and remote dad, I've learned that the best technology isn't the most advanced—it's the technology that makes our lives more human, not less.
                </p>

                <p className="text-lg text-gray-700 mb-6 leading-relaxed">
                  I wrote this book because I believe we're at a critical inflection point. The choices we make today about technology will shape humanity for generations. This book is my contribution to ensuring we choose wisely.
                </p>

                <Button
                  size="lg"
                  style={{
                    backgroundColor: "var(--deep-tech-blue)",
                    color: "white"
                  }}
                  onClick={() => window.location.hash = "about-me"}
                >
                  Learn More About Me
                  <ArrowRight className="ml-2" size={18} />
                </Button>
              </motion.div>
            </div>
          </motion.div>
        </div>
      </section>

      {/* Social Proof */}
      <section ref={socialRef} className="py-20 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <motion.div
            initial={{ opacity: 0, y: 30 }}
            animate={isSocialInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.8 }}
            className="text-center mb-12"
          >
            <h2
              className="mb-6 text-4xl tracking-tight"
              style={{ color: "var(--deep-tech-blue)" }}
            >
              What Early Readers Are Saying
            </h2>
            <div
              className="w-24 h-1 mx-auto mb-6"
              style={{ backgroundColor: "var(--warm-ember)" }}
            />
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              Join hundreds of innovators, leaders, and thinkers who are already transforming their approach to technology.
            </p>
          </motion.div>

          <div className="grid md:grid-cols-3 gap-8">
            {testimonials.map((testimonial, index) => (
              <motion.div
                key={index}
                initial={{ opacity: 0, y: 30 }}
                animate={isSocialInView ? { opacity: 1, y: 0 } : {}}
                transition={{ duration: 0.6, delay: 0.2 * index }}
              >
                <Card className="h-full hover:shadow-xl transition-shadow">
                  <CardContent className="p-6">
                    <div className="flex items-center gap-2 mb-4">
                      {[...Array(5)].map((_, i) => (
                        <Star
                          key={i}
                          size={18}
                          fill="var(--warm-ember)"
                          style={{ color: "var(--warm-ember)" }}
                        />
                      ))}
                    </div>
                    <p className="text-gray-700 mb-6 italic">"{testimonial.quote}"</p>
                    <Separator className="mb-4" />
                    <div className="flex items-center gap-3">
                      <ImageWithFallback
                        src={testimonial.avatar}
                        alt={testimonial.name}
                        className="w-12 h-12 rounded-full object-cover"
                      />
                      <div>
                        <p className="text-sm" style={{ color: "var(--deep-tech-blue)" }}>
                          {testimonial.name}
                        </p>
                        <p className="text-sm text-gray-500">{testimonial.role}</p>
                      </div>
                    </div>
                  </CardContent>
                </Card>
              </motion.div>
            ))}
          </div>

          <motion.div
            initial={{ opacity: 0 }}
            animate={isSocialInView ? { opacity: 1 } : {}}
            transition={{ duration: 0.8, delay: 0.8 }}
            className="text-center mt-8"
          >
            <p className="text-gray-500 italic">More endorsements coming soon from industry leaders...</p>
          </motion.div>
        </div>
      </section>

      {/* CTA Section with Form */}
      <section
        ref={ctaRef}
        id="download-cta"
        className="py-20"
        style={{
          background: "linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple))"
        }}
      >
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
          <motion.div
            initial={{ opacity: 0, y: 30 }}
            animate={isCtaInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.8 }}
            className="text-center text-white"
          >
            <h2 className="mb-6 text-4xl tracking-tight">
              Ready to Get Started?
            </h2>
            <p className="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
              Download the first chapter free and discover how to build a technological future that amplifies human potential.
            </p>

            {!isSubmitted ? (
              <motion.form
                initial={{ opacity: 0, scale: 0.95 }}
                animate={isCtaInView ? { opacity: 1, scale: 1 } : {}}
                transition={{ duration: 0.6, delay: 0.2 }}
                onSubmit={handleSubmit}
                className="max-w-xl mx-auto bg-white rounded-2xl p-8 shadow-2xl"
              >
                <div className="space-y-4 mb-6">
                  <div className="relative">
                    <User
                      className="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"
                      size={20}
                    />
                    <Input
                      type="text"
                      placeholder="Your name"
                      value={name}
                      onChange={(e) => setName(e.target.value)}
                      required
                      className="pl-10 h-12"
                    />
                  </div>
                  <div className="relative">
                    <Mail
                      className="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"
                      size={20}
                    />
                    <Input
                      type="email"
                      placeholder="Your email"
                      value={email}
                      onChange={(e) => setEmail(e.target.value)}
                      required
                      className="pl-10 h-12"
                    />
                  </div>
                </div>

                <Button
                  type="submit"
                  size="lg"
                  className="w-full text-white text-lg h-14"
                  style={{ backgroundColor: "var(--sunset-orange)" }}
                >
                  <Download className="mr-2" size={20} />
                  Download Free Sample Chapter
                </Button>

                <div className="flex items-center justify-center gap-2 mt-4 text-sm text-gray-600">
                  <Shield size={16} />
                  <p>No spam, just early access & updates</p>
                </div>
              </motion.form>
            ) : (
              <motion.div
                initial={{ opacity: 0, scale: 0.9 }}
                animate={{ opacity: 1, scale: 1 }}
                className="max-w-xl mx-auto bg-white rounded-2xl p-8 shadow-2xl"
              >
                <div
                  className="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
                  style={{ backgroundColor: "var(--electric-cyan)" }}
                >
                  <CheckCircle2 size={32} className="text-white" />
                </div>
                <h3 className="text-2xl mb-2" style={{ color: "var(--deep-tech-blue)" }}>
                  Thank You, {name}!
                </h3>
                <p className="text-gray-600 mb-6">
                  Check your email for the download link. We've also subscribed you to early updates about the book launch.
                </p>
                <Button
                  onClick={() => setIsSubmitted(false)}
                  variant="outline"
                  style={{ borderColor: "var(--deep-tech-blue)", color: "var(--deep-tech-blue)" }}
                >
                  Download Another Copy
                </Button>
              </motion.div>
            )}

            <motion.div
              initial={{ opacity: 0 }}
              animate={isCtaInView ? { opacity: 1 } : {}}
              transition={{ duration: 0.6, delay: 0.4 }}
              className="mt-8 flex flex-wrap items-center justify-center gap-6 text-white/80"
            >
              <div className="flex items-center gap-2">
                <CheckCircle2 size={20} />
                <span>Instant Download</span>
              </div>
              <div className="flex items-center gap-2">
                <CheckCircle2 size={20} />
                <span>PDF Format</span>
              </div>
              <div className="flex items-center gap-2">
                <CheckCircle2 size={20} />
                <span>25+ Pages</span>
              </div>
            </motion.div>
          </motion.div>
        </div>
      </section>

      {/* Sneak Peek */}
      <section ref={sneakRef} className="py-20 bg-gray-50">
        <div className="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
          <motion.div
            initial={{ opacity: 0, y: 30 }}
            animate={isSneakInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.8 }}
            className="text-center mb-12"
          >
            <h2
              className="mb-6 text-4xl tracking-tight"
              style={{ color: "var(--deep-tech-blue)" }}
            >
              Inside the Book
            </h2>
            <div
              className="w-24 h-1 mx-auto mb-6"
              style={{ backgroundColor: "var(--warm-ember)" }}
            />
            <p className="text-xl text-gray-600 max-w-3xl mx-auto">
              A glimpse into the topics and frameworks you'll discover
            </p>
          </motion.div>

          <motion.div
            initial={{ opacity: 0, y: 30 }}
            animate={isSneakInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.8, delay: 0.2 }}
          >
            <Card className="overflow-hidden">
              <CardContent className="p-0">
                <div className="relative">
                  {/* Blurred background */}
                  <div className="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-white z-10" />
                  
                  <div className="p-8 relative">
                    <h3 className="text-2xl mb-6" style={{ color: "var(--deep-tech-blue)" }}>
                      Table of Contents
                    </h3>
                    
                    <div className="space-y-4">
                      {chapterPreviews.map((chapter, index) => (
                        <motion.div
                          key={index}
                          initial={{ opacity: 0, x: -20 }}
                          animate={isSneakInView ? { opacity: 1, x: 0 } : {}}
                          transition={{ duration: 0.6, delay: 0.1 * index }}
                          className={`flex items-start gap-4 p-4 rounded-lg ${
                            index < 2 ? "bg-white" : "blur-sm opacity-50"
                          }`}
                        >
                          <div
                            className="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center"
                            style={{
                              backgroundColor: index < 2 ? "var(--electric-cyan)" : "var(--muted)"
                            }}
                          >
                            <span className={index < 2 ? "text-white" : "text-gray-400"}>
                              {index + 1}
                            </span>
                          </div>
                          <p className="flex-1 pt-2 text-gray-700">{chapter}</p>
                        </motion.div>
                      ))}
                    </div>

                    <div className="text-center mt-8 relative z-20">
                      <p className="text-gray-600 mb-4">
                        + 7 more chapters covering implementation, case studies, and future trends
                      </p>
                      <Button
                        size="lg"
                        style={{ backgroundColor: "var(--sunset-orange)", color: "white" }}
                        onClick={() => {
                          const ctaSection = document.getElementById("download-cta");
                          ctaSection?.scrollIntoView({ behavior: "smooth" });
                        }}
                      >
                        Get the Full Preview
                        <ArrowRight className="ml-2" size={18} />
                      </Button>
                    </div>
                  </div>
                </div>
              </CardContent>
            </Card>
          </motion.div>
        </div>
      </section>
    </div>
  );
}
