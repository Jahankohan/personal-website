import { useState, useEffect } from "react";
import { Menu, X } from "lucide-react";
import { Button } from "./ui/button";
import { motion, AnimatePresence } from "motion/react";

export function Navigation() {
  const [isScrolled, setIsScrolled] = useState(false);
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 50);
    };

    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  const handleNavigation = (id: string, isRoute: boolean) => {
    if (isRoute) {
      window.location.hash = id;
      setIsMobileMenuOpen(false);
    } else {
      // First navigate to home if not already there
      if (window.location.hash !== "" && window.location.hash !== "#") {
        window.location.hash = "";
        // Wait for navigation then scroll
        setTimeout(() => {
          const element = document.getElementById(id);
          if (element) {
            element.scrollIntoView({ behavior: "smooth" });
          }
        }, 100);
      } else {
        const element = document.getElementById(id);
        if (element) {
          element.scrollIntoView({ behavior: "smooth" });
        }
      }
      setIsMobileMenuOpen(false);
    }
  };

  const navItems = [
    { label: "Home", id: "", isRoute: true },
    { label: "About", id: "about-me", isRoute: true },
    { label: "Resources", id: "resources", isRoute: true },
    { label: "Blog", id: "blog", isRoute: true },
    { label: "Book", id: "book-detail", isRoute: true },
  ];

  return (
    <motion.nav
      initial={{ y: -100 }}
      animate={{ y: 0 }}
      className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${
        isScrolled
          ? "bg-white/90 backdrop-blur-md shadow-lg"
          : "bg-transparent"
      }`}
    >
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between items-center h-20">
          <motion.div
            initial={{ opacity: 0 }}
            animate={{ opacity: 1 }}
            transition={{ delay: 0.2 }}
            className="cursor-pointer"
            onClick={() => {
              window.location.hash = "";
            }}
          >
            <span
              className="tracking-tight"
              style={{ color: "var(--deep-tech-blue)" }}
            >
              Tech & Humanity
            </span>
          </motion.div>

          {/* Desktop Navigation */}
          <div className="hidden md:flex items-center space-x-8">
            {navItems.map((item, index) => (
              <motion.button
                key={item.id}
                initial={{ opacity: 0, y: -20 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ delay: 0.1 * index }}
                onClick={() => handleNavigation(item.id, item.isRoute)}
                className="transition-colors hover:opacity-80"
                style={{ color: isScrolled ? "var(--deep-tech-blue)" : "white" }}
              >
                {item.label}
              </motion.button>
            ))}
            <Button
              onClick={() => handleNavigation("contact", false)}
              className="transition-all"
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
              Get in Touch
            </Button>
          </div>

          {/* Mobile Menu Button */}
          <button
            className="md:hidden"
            onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
            style={{ color: isScrolled ? "var(--deep-tech-blue)" : "white" }}
          >
            {isMobileMenuOpen ? <X size={24} /> : <Menu size={24} />}
          </button>
        </div>
      </div>

      {/* Mobile Menu */}
      <AnimatePresence>
        {isMobileMenuOpen && (
          <motion.div
            initial={{ opacity: 0, height: 0 }}
            animate={{ opacity: 1, height: "auto" }}
            exit={{ opacity: 0, height: 0 }}
            className="md:hidden bg-white/95 backdrop-blur-md"
          >
            <div className="px-4 pt-2 pb-4 space-y-3">
              {navItems.map((item) => (
                <button
                  key={item.id}
                  onClick={() => handleNavigation(item.id, item.isRoute)}
                  className="block w-full text-left py-2 px-4 rounded-lg transition-colors"
                  style={{
                    color: "var(--deep-tech-blue)",
                  }}
                >
                  {item.label}
                </button>
              ))}
              <Button
                onClick={() => handleNavigation("contact", false)}
                className="w-full"
                style={{
                  backgroundColor: "var(--sunset-orange)",
                  color: "white",
                }}
              >
                Get in Touch
              </Button>
            </div>
          </motion.div>
        )}
      </AnimatePresence>
    </motion.nav>
  );
}
