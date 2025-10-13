import { Twitter, Linkedin, Github, Mail } from "lucide-react";

export function Footer() {
  const handleNavigation = (id: string, isRoute: boolean) => {
    if (isRoute) {
      window.location.hash = id;
    } else {
      const element = document.getElementById(id);
      if (element) {
        element.scrollIntoView({ behavior: "smooth" });
      }
    }
  };

  const footerLinks = {
    explore: [
      { label: "About", id: "about-me", isRoute: true },
      { label: "Resources", id: "resources", isRoute: true },
      { label: "Blog", id: "blog", isRoute: true },
      { label: "Book", id: "book-detail", isRoute: true },
      { label: "Get in Touch", id: "contact", isRoute: false },
      { label: "Link Hub", id: "links", isRoute: true },
    ],
    categories: [
      { label: "Future Tech Decoder", id: "blog", isRoute: false },
      { label: "Open Collaboration", id: "blog", isRoute: false },
      { label: "Human-Centered Innovation", id: "blog", isRoute: false },
      { label: "Remote Dad Notes", id: "blog", isRoute: false },
    ],
  };

  const socialLinks = [
    { icon: Twitter, label: "Twitter", href: "#" },
    { icon: Linkedin, label: "LinkedIn", href: "#" },
    { icon: Github, label: "GitHub", href: "#" },
    { icon: Mail, label: "Email", href: "mailto:hello@example.com" },
  ];

  return (
    <footer
      className="pt-16 pb-8"
      style={{ backgroundColor: "var(--deep-tech-blue)" }}
    >
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid md:grid-cols-4 gap-8 mb-12">
          <div className="md:col-span-2">
            <h3 className="text-white mb-4">Tech & Humanity</h3>
            <p className="text-white/80 mb-6 max-w-md">
              Bridging the gap between emerging technologies and human values.
              Exploring AI, blockchain, and the future we're building together.
            </p>
            <div className="flex gap-4">
              {socialLinks.map((social) => (
                <a
                  key={social.label}
                  href={social.href}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="w-10 h-10 rounded-full flex items-center justify-center transition-colors"
                  style={{
                    backgroundColor: "rgba(255, 255, 255, 0.1)",
                  }}
                  onMouseEnter={(e) => {
                    e.currentTarget.style.backgroundColor = "var(--sunset-orange)";
                  }}
                  onMouseLeave={(e) => {
                    e.currentTarget.style.backgroundColor = "rgba(255, 255, 255, 0.1)";
                  }}
                  aria-label={social.label}
                >
                  <social.icon size={18} className="text-white" />
                </a>
              ))}
            </div>
          </div>

          <div>
            <h4 className="text-white mb-4">Explore</h4>
            <ul className="space-y-2">
              {footerLinks.explore.map((link) => (
                <li key={link.label}>
                  <button
                    onClick={() => handleNavigation(link.id, link.isRoute)}
                    className="text-white/80 hover:text-white transition-colors"
                  >
                    {link.label}
                  </button>
                </li>
              ))}
            </ul>
          </div>

          <div>
            <h4 className="text-white mb-4">Categories</h4>
            <ul className="space-y-2">
              {footerLinks.categories.map((link) => (
                <li key={link.label}>
                  <button
                    onClick={() => handleNavigation(link.id, link.isRoute)}
                    className="text-white/80 hover:text-white transition-colors"
                  >
                    {link.label}
                  </button>
                </li>
              ))}
            </ul>
          </div>
        </div>

        <div
          className="pt-8 border-t text-center text-white/60 text-sm"
          style={{ borderColor: "rgba(255, 255, 255, 0.1)" }}
        >
          <p>© 2025 Tech & Humanity. All rights reserved.</p>
          <p className="mt-2">
            Built with passion for technology and humanity.
          </p>
        </div>
      </div>
    </footer>
  );
}
