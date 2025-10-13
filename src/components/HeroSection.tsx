import { useEffect, useRef } from "react";
import { motion } from "motion/react";
import { Button } from "./ui/button";
import { ArrowRight, Sparkles } from "lucide-react";

export function HeroSection() {
  const canvasRef = useRef<HTMLCanvasElement>(null);

  useEffect(() => {
    const canvas = canvasRef.current;
    if (!canvas) return;

    const ctx = canvas.getContext("2d");
    if (!ctx) return;

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    let animationFrameId: number;
    let time = 0;

    const animate = () => {
      time += 0.005;

      // Create animated gradient
      const gradient = ctx.createLinearGradient(
        0,
        0,
        canvas.width,
        canvas.height
      );

      const deepTechBlue = `rgba(10, 36, 99, ${0.9 + Math.sin(time) * 0.1})`;
      const neuralPurple = `rgba(123, 44, 191, ${0.8 + Math.cos(time) * 0.2})`;

      gradient.addColorStop(0, deepTechBlue);
      gradient.addColorStop(0.5, neuralPurple);
      gradient.addColorStop(1, deepTechBlue);

      ctx.fillStyle = gradient;
      ctx.fillRect(0, 0, canvas.width, canvas.height);

      // Add subtle particles
      ctx.fillStyle = `rgba(255, 255, 255, ${0.1 + Math.sin(time * 2) * 0.05})`;
      for (let i = 0; i < 50; i++) {
        const x = (Math.sin(time + i) * canvas.width) / 2 + canvas.width / 2;
        const y = (Math.cos(time * 0.7 + i) * canvas.height) / 2 + canvas.height / 2;
        ctx.beginPath();
        ctx.arc(x, y, 2, 0, Math.PI * 2);
        ctx.fill();
      }

      animationFrameId = requestAnimationFrame(animate);
    };

    animate();

    const handleResize = () => {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    };

    window.addEventListener("resize", handleResize);

    return () => {
      cancelAnimationFrame(animationFrameId);
      window.removeEventListener("resize", handleResize);
    };
  }, []);

  const scrollToSection = (id: string) => {
    const element = document.getElementById(id);
    if (element) {
      element.scrollIntoView({ behavior: "smooth" });
    }
  };

  return (
    <section id="hero" className="relative min-h-screen flex items-center justify-center overflow-hidden">
      <canvas
        ref={canvasRef}
        className="absolute inset-0 w-full h-full"
      />

      <div className="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8 }}
          className="flex justify-center mb-6"
        >
          <div
            className="inline-flex items-center gap-2 px-4 py-2 rounded-full backdrop-blur-sm"
            style={{
              backgroundColor: "rgba(255, 255, 255, 0.1)",
              border: "1px solid rgba(255, 255, 255, 0.2)",
            }}
          >
            <Sparkles size={16} className="text-white" />
            <span className="text-sm text-white">
              Bridging Technology & Humanity
            </span>
          </div>
        </motion.div>

        <motion.h1
          initial={{ opacity: 0, y: 30 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8, delay: 0.2 }}
          className="text-white mb-6 text-4xl sm:text-5xl md:text-6xl lg:text-7xl tracking-tight"
        >
          Navigating the Future of
          <br />
          AI & Emerging Tech
        </motion.h1>

        <motion.p
          initial={{ opacity: 0, y: 30 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8, delay: 0.4 }}
          className="text-xl sm:text-2xl mb-10 max-w-3xl mx-auto"
          style={{ color: "var(--warm-ember)" }}
        >
          Expert insights on blockchain, artificial intelligence, and the technologies
          shaping tomorrow — with a human touch.
        </motion.p>

        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8, delay: 0.6 }}
          className="flex flex-col sm:flex-row gap-4 justify-center items-center"
        >
          <Button
            size="lg"
            onClick={() => window.location.hash = "resources"}
            className="group transition-all text-lg px-8 py-6"
            style={{
              backgroundColor: "var(--sunset-orange)",
              color: "white",
            }}
            onMouseEnter={(e) => {
              e.currentTarget.style.backgroundColor = "var(--deep-tech-blue)";
            }}
            onMouseLeave={(e) => {
              e.currentTarget.style.backgroundColor = "var(--sunset-orange)";
            }}
          >
            Explore Resources
            <ArrowRight className="ml-2 group-hover:translate-x-1 transition-transform" />
          </Button>

          <Button
            size="lg"
            variant="outline"
            onClick={() => scrollToSection("contact")}
            className="text-lg px-8 py-6"
            style={{
              borderColor: "white",
              color: "white",
              backgroundColor: "rgba(255, 255, 255, 0.1)",
            }}
            onMouseEnter={(e) => {
              e.currentTarget.style.backgroundColor = "rgba(255, 255, 255, 0.2)";
            }}
            onMouseLeave={(e) => {
              e.currentTarget.style.backgroundColor = "rgba(255, 255, 255, 0.1)";
            }}
          >
            Get in Touch
          </Button>
        </motion.div>

        <motion.div
          initial={{ opacity: 0 }}
          animate={{ opacity: 1 }}
          transition={{ duration: 1, delay: 1 }}
          className="mt-16"
        >
          <button
            onClick={() => scrollToSection("about")}
            className="animate-bounce"
            style={{ color: "white" }}
          >
            <svg
              className="w-6 h-6 mx-auto"
              fill="none"
              strokeLinecap="round"
              strokeLinejoin="round"
              strokeWidth="2"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
          </button>
        </motion.div>
      </div>
    </section>
  );
}
