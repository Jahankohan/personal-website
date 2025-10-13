import { motion, useInView } from "motion/react";
import { useRef } from "react";
import { Button } from "./ui/button";
import { ImageWithFallback } from "./figma/ImageWithFallback";
import { Brain, Users, Lightbulb, Globe, ArrowRight } from "lucide-react";

export function AboutSection() {
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true, amount: 0.3 });

  const experiences = [
    {
      icon: Brain,
      title: "AI & Innovation",
      description:
        "Deep expertise in artificial intelligence, machine learning, and their practical applications in solving real-world challenges.",
    },
    {
      icon: Globe,
      title: "Blockchain Pioneer",
      description:
        "Early adopter and advocate of blockchain technology, exploring decentralized systems and their potential to transform industries.",
    },
    {
      icon: Users,
      title: "Human-Centered Approach",
      description:
        "Committed to ensuring technology serves humanity, not the other way around. Every innovation should enhance human connection.",
    },
    {
      icon: Lightbulb,
      title: "Thought Leadership",
      description:
        "Regular speaker, writer, and consultant helping organizations navigate the complex landscape of emerging technologies.",
    },
  ];

  return (
    <section id="about" ref={ref} className="py-24 bg-white">
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
            About Me
          </h2>
          <div
            className="w-24 h-1 mx-auto mb-6"
            style={{ backgroundColor: "var(--warm-ember)" }}
          />
          <p className="text-xl max-w-3xl mx-auto text-gray-700">
            I'm a technology strategist, blockchain enthusiast, and AI advocate
            dedicated to building bridges between cutting-edge innovation and
            human values.
          </p>
        </motion.div>

        <div className="grid md:grid-cols-2 gap-12 items-center mb-16">
          <motion.div
            initial={{ opacity: 0, x: -50 }}
            animate={isInView ? { opacity: 1, x: 0 } : {}}
            transition={{ duration: 0.6, delay: 0.2 }}
          >
            <ImageWithFallback
              src="https://images.unsplash.com/flagged/photo-1573582677725-863b570e3c00?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBwb3J0cmFpdCUyMHdhcm18ZW58MXx8fHwxNzU5MzI1NTQ5fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
              alt="Professional portrait"
              className="w-full h-auto rounded-2xl shadow-2xl"
            />
          </motion.div>

          <motion.div
            initial={{ opacity: 0, x: 50 }}
            animate={isInView ? { opacity: 1, x: 0 } : {}}
            transition={{ duration: 0.6, delay: 0.4 }}
          >
            <h3
              className="mb-4 text-3xl tracking-tight"
              style={{ color: "var(--deep-tech-blue)" }}
            >
              My Journey
            </h3>
            <div className="space-y-4 text-gray-700">
              <p>
                For over a decade, I've been exploring the intersection of
                technology and human experience. What started as fascination with
                code evolved into a mission: making emerging technologies
                accessible, ethical, and beneficial for everyone.
              </p>
              <p>
                From consulting Fortune 500 companies on AI strategy to helping
                startups navigate blockchain implementation, I've seen firsthand
                how technology can either amplify or diminish our humanity. My
                work is guided by a simple principle: innovation without empathy
                is just noise.
              </p>
              <p>
                When I'm not decoding the latest tech trends, you'll find me
                sharing insights through writing, speaking at conferences, or
                spending quality time with my family — because the best
                technology is the kind that brings us closer together.
              </p>
            </div>
            <motion.div
              initial={{ opacity: 0, y: 20 }}
              animate={isInView ? { opacity: 1, y: 0 } : {}}
              transition={{ duration: 0.6, delay: 0.6 }}
              className="mt-6"
            >
              <Button
                size="lg"
                className="text-white"
                style={{ backgroundColor: "var(--sunset-orange)" }}
                onClick={() => window.location.hash = "about-me"}
              >
                Learn More About Me
                <ArrowRight className="ml-2" size={18} />
              </Button>
            </motion.div>
          </motion.div>
        </div>

        <div className="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
          {experiences.map((exp, index) => (
            <motion.div
              key={exp.title}
              initial={{ opacity: 0, y: 30 }}
              animate={isInView ? { opacity: 1, y: 0 } : {}}
              transition={{ duration: 0.6, delay: 0.2 + index * 0.1 }}
              className="p-6 rounded-xl bg-white shadow-lg hover:shadow-xl transition-shadow border"
              style={{ borderColor: "var(--warm-ember)" }}
            >
              <div
                className="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                style={{ backgroundColor: "var(--warm-ember)" }}
              >
                <exp.icon className="text-white" size={24} />
              </div>
              <h4
                className="mb-2"
                style={{ color: "var(--deep-tech-blue)" }}
              >
                {exp.title}
              </h4>
              <p className="text-gray-600">{exp.description}</p>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
}
