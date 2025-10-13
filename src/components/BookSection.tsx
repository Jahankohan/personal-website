import { useRef, useState } from "react";
import { motion, useInView } from "motion/react";
import { Button } from "./ui/button";
import { Input } from "./ui/input";
import { ImageWithFallback } from "./figma/ImageWithFallback";
import { Download, BookOpen, CheckCircle, ArrowRight } from "lucide-react";

export function BookSection() {
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true, amount: 0.3 });
  const [email, setEmail] = useState("");
  const [isSubmitted, setIsSubmitted] = useState(false);

  const handlePreRegister = (e: React.FormEvent) => {
    e.preventDefault();
    setIsSubmitted(true);
    setTimeout(() => {
      setEmail("");
      setIsSubmitted(false);
    }, 3000);
  };

  const benefits = [
    "Early access to exclusive chapters",
    "Behind-the-scenes insights from the writing process",
    "Special pre-order pricing",
    "Invitation to virtual book launch event",
  ];

  return (
    <section id="book" ref={ref} className="py-24 bg-white">
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
            Upcoming Book
          </h2>
          <div
            className="w-24 h-1 mx-auto mb-6"
            style={{ backgroundColor: "var(--warm-ember)" }}
          />
        </motion.div>

        <div className="grid md:grid-cols-2 gap-12 items-center">
          <motion.div
            initial={{ opacity: 0, x: -50 }}
            animate={isInView ? { opacity: 1, x: 0 } : {}}
            transition={{ duration: 0.6, delay: 0.2 }}
            className="relative"
          >
            <div
              className="absolute -inset-4 rounded-3xl opacity-20 blur-2xl"
              style={{ backgroundColor: "var(--neural-purple)" }}
            />
            <ImageWithFallback
              src="https://images.unsplash.com/photo-1506880018603-83d5b814b5a6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxib29rJTIwcmVhZGluZ3xlbnwxfHx8fDE3NTkzMDYzNDF8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
              alt="Book cover"
              className="relative w-full h-auto rounded-2xl shadow-2xl"
            />
          </motion.div>

          <motion.div
            initial={{ opacity: 0, x: 50 }}
            animate={isInView ? { opacity: 1, x: 0 } : {}}
            transition={{ duration: 0.6, delay: 0.4 }}
          >
            <div className="inline-flex items-center gap-2 px-3 py-1 rounded-full mb-4"
              style={{
                backgroundColor: "var(--electric-cyan)",
                color: "white",
              }}
            >
              <BookOpen size={16} />
              <span className="text-sm">Coming 2026</span>
            </div>

            <h3
              className="mb-4 text-3xl sm:text-4xl tracking-tight"
              style={{ color: "var(--deep-tech-blue)" }}
            >
              The Human Algorithm: Finding Meaning in the Age of AI
            </h3>

            <p className="text-gray-700 mb-6 text-lg">
              A practical guide to maintaining your humanity while embracing the
              transformative power of artificial intelligence and emerging
              technologies. This book explores how we can shape technology that
              amplifies our best qualities rather than replacing them.
            </p>

            <div className="mb-8">
              <h4 className="mb-4" style={{ color: "var(--warm-ember)" }}>
                Pre-registration Benefits:
              </h4>
              <ul className="space-y-3">
                {benefits.map((benefit, index) => (
                  <motion.li
                    key={benefit}
                    initial={{ opacity: 0, x: -20 }}
                    animate={isInView ? { opacity: 1, x: 0 } : {}}
                    transition={{ duration: 0.6, delay: 0.6 + index * 0.1 }}
                    className="flex items-start gap-3"
                  >
                    <CheckCircle
                      size={20}
                      className="flex-shrink-0 mt-1"
                      style={{ color: "var(--warm-ember)" }}
                    />
                    <span className="text-gray-700">{benefit}</span>
                  </motion.li>
                ))}
              </ul>
            </div>

            <form onSubmit={handlePreRegister} className="space-y-4">
              <div className="flex flex-col sm:flex-row gap-3">
                <Input
                  type="email"
                  placeholder="Enter your email"
                  value={email}
                  onChange={(e) => setEmail(e.target.value)}
                  required
                  className="flex-1 transition-all"
                  style={{
                    borderColor: "var(--deep-tech-blue)",
                  }}
                  onFocus={(e) => {
                    e.currentTarget.style.borderColor = "var(--sunset-orange)";
                  }}
                  onBlur={(e) => {
                    e.currentTarget.style.borderColor = "var(--deep-tech-blue)";
                  }}
                />
                <Button
                  type="submit"
                  size="lg"
                  disabled={isSubmitted}
                  className="whitespace-nowrap transition-all"
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
                      Registered!
                    </>
                  ) : (
                    "Pre-Register Now"
                  )}
                </Button>
              </div>
            </form>

            <div className="mt-6 flex flex-col sm:flex-row gap-4">
              <button
                onClick={() => window.location.hash = "book-detail"}
                className="inline-flex items-center gap-2 transition-opacity hover:opacity-80"
                style={{ color: "var(--sunset-orange)" }}
              >
                Learn More About the Book
                <ArrowRight size={18} />
              </button>
              <button
                onClick={() => window.location.hash = "book-detail"}
                className="inline-flex items-center gap-2 text-sm transition-opacity hover:opacity-80"
                style={{ color: "var(--deep-tech-blue)" }}
              >
                <Download size={16} />
                Download Sample Chapter
              </button>
            </div>
          </motion.div>
        </div>
      </div>
    </section>
  );
}
