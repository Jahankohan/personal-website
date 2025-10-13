import { useState, useRef } from "react";
import { motion, useInView } from "motion/react";
import { Button } from "./ui/button";
import { Badge } from "./ui/badge";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "./ui/card";
import { Dialog, DialogContent, DialogDescription, DialogHeader, DialogTitle } from "./ui/dialog";
import { Input } from "./ui/input";
import { Label } from "./ui/label";
import { FileText, TrendingUp, BarChart3, Zap, Download, CheckCircle } from "lucide-react";

type ResourceCategory = "whitepaper" | "survey" | "market-insights" | "future-trends";

interface Resource {
  id: string;
  title: string;
  description: string;
  category: ResourceCategory;
  headlines: string[];
  pages: number;
  downloadSize: string;
  publishDate: string;
}

const resources: Resource[] = [
  {
    id: "ai-implementation-guide",
    title: "AI Implementation Guide 2025",
    description: "A comprehensive guide to successfully implementing artificial intelligence in enterprise environments.",
    category: "whitepaper",
    headlines: [
      "Understanding AI readiness and organizational assessment",
      "Step-by-step implementation framework",
      "Common pitfalls and how to avoid them",
      "ROI measurement and success metrics",
      "Real-world case studies from Fortune 500 companies"
    ],
    pages: 45,
    downloadSize: "3.2 MB",
    publishDate: "September 2025"
  },
  {
    id: "blockchain-enterprise",
    title: "Blockchain for Enterprise: Beyond the Hype",
    description: "Exploring practical applications of blockchain technology in supply chain, finance, and healthcare.",
    category: "whitepaper",
    headlines: [
      "Demystifying blockchain technology",
      "Real-world use cases across industries",
      "Implementation considerations and costs",
      "Security and compliance frameworks",
      "Future-proofing your blockchain strategy"
    ],
    pages: 38,
    downloadSize: "2.8 MB",
    publishDate: "August 2025"
  },
  {
    id: "tech-readiness-survey",
    title: "2025 Tech Readiness Survey Results",
    description: "Insights from 500+ organizations on their digital transformation journey and technology adoption.",
    category: "survey",
    headlines: [
      "Current state of technology adoption across industries",
      "Key challenges and barriers to implementation",
      "Investment priorities for the next 12 months",
      "Skills gap analysis and training needs",
      "Comparative benchmarks by company size and sector"
    ],
    pages: 28,
    downloadSize: "1.9 MB",
    publishDate: "September 2025"
  },
  {
    id: "remote-work-technology",
    title: "The Future of Remote Work Technology",
    description: "Survey results on how organizations are leveraging technology for distributed teams.",
    category: "survey",
    headlines: [
      "Most effective tools and platforms",
      "Employee satisfaction and productivity metrics",
      "Security concerns and solutions",
      "Cost savings and ROI analysis",
      "Predictions for the future of work"
    ],
    pages: 22,
    downloadSize: "1.5 MB",
    publishDate: "July 2025"
  },
  {
    id: "ai-market-outlook",
    title: "AI Market Outlook 2026-2028",
    description: "Comprehensive analysis of the AI market landscape, emerging players, and investment opportunities.",
    category: "market-insights",
    headlines: [
      "Market size and growth projections",
      "Key players and competitive landscape",
      "Emerging segments and opportunities",
      "Regulatory trends and their impact",
      "Investment recommendations"
    ],
    pages: 52,
    downloadSize: "4.1 MB",
    publishDate: "October 2025"
  },
  {
    id: "blockchain-market-analysis",
    title: "Blockchain Market Analysis Q3 2025",
    description: "Deep dive into blockchain market trends, adoption rates, and financial forecasts.",
    category: "market-insights",
    headlines: [
      "Quarterly market performance review",
      "Sector-specific adoption trends",
      "Funding and investment activity",
      "Notable partnerships and acquisitions",
      "Market outlook for Q4 and beyond"
    ],
    pages: 34,
    downloadSize: "2.6 MB",
    publishDate: "September 2025"
  },
  {
    id: "emerging-tech-2026",
    title: "Emerging Technologies to Watch in 2026",
    description: "Expert predictions on breakthrough technologies that will shape the next decade.",
    category: "future-trends",
    headlines: [
      "Quantum computing's commercial breakthrough",
      "AI agents and autonomous systems",
      "Web3 and decentralized technologies",
      "Biotech meets digital innovation",
      "Climate tech and sustainable solutions"
    ],
    pages: 41,
    downloadSize: "3.5 MB",
    publishDate: "October 2025"
  },
  {
    id: "human-ai-collaboration",
    title: "The Future of Human-AI Collaboration",
    description: "Exploring how humans and AI will work together in the workplace of tomorrow.",
    category: "future-trends",
    headlines: [
      "Evolution of AI capabilities and limitations",
      "New job roles and skill requirements",
      "Ethical frameworks for AI collaboration",
      "Augmented intelligence vs artificial intelligence",
      "Preparing your workforce for AI integration"
    ],
    pages: 36,
    downloadSize: "2.9 MB",
    publishDate: "September 2025"
  }
];

const categories = [
  { 
    id: "all" as const, 
    label: "All Resources", 
    icon: FileText, 
    color: "var(--deep-tech-blue)" 
  },
  { 
    id: "whitepaper", 
    label: "Whitepapers", 
    icon: FileText, 
    color: "var(--electric-cyan)" 
  },
  { 
    id: "survey", 
    label: "Surveys", 
    icon: BarChart3, 
    color: "var(--warm-ember)" 
  },
  { 
    id: "market-insights", 
    label: "Market Insights", 
    icon: TrendingUp, 
    color: "var(--neural-purple)" 
  },
  { 
    id: "future-trends", 
    label: "Future Trends", 
    icon: Zap, 
    color: "var(--sunset-orange)" 
  }
];

export function ResourcesPage() {
  const [activeCategory, setActiveCategory] = useState<ResourceCategory | "all">("all");
  const [selectedResource, setSelectedResource] = useState<Resource | null>(null);
  const [isDownloadModalOpen, setIsDownloadModalOpen] = useState(false);
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true, amount: 0.2 });

  const filteredResources = activeCategory === "all" 
    ? resources 
    : resources.filter(r => r.category === activeCategory);

  const getCategoryColor = (category: ResourceCategory) => {
    return categories.find(c => c.id === category)?.color || "var(--deep-tech-blue)";
  };

  const handleResourceClick = (resource: Resource) => {
    window.location.hash = `resource/${resource.id}`;
  };

  return (
    <div className="min-h-screen bg-gray-50">
      {/* Hero Section */}
      <section 
        className="py-24 relative overflow-hidden"
        style={{
          background: "linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple))"
        }}
      >
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
          <motion.div
            initial={{ opacity: 0, y: 30 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.8 }}
            className="text-center"
          >
            <h1 className="text-white mb-6 text-4xl sm:text-5xl md:text-6xl tracking-tight">
              Free Resources Library
            </h1>
            <p className="text-white/90 text-xl max-w-3xl mx-auto mb-8">
              Access exclusive whitepapers, surveys, market insights, and trend reports 
              on AI, blockchain, and emerging technologies.
            </p>
            <div className="flex justify-center gap-6 text-white/80">
              <div className="text-center">
                <div className="text-3xl mb-1">{resources.length}</div>
                <div className="text-sm">Resources</div>
              </div>
              <div className="text-center">
                <div className="text-3xl mb-1">PDF</div>
                <div className="text-sm">Format</div>
              </div>
              <div className="text-center">
                <div className="text-3xl mb-1">Free</div>
                <div className="text-sm">Download</div>
              </div>
            </div>
          </motion.div>
        </div>
      </section>

      {/* Resources Section */}
      <section ref={ref} className="py-16">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          {/* Category Filter */}
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={isInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.6 }}
            className="flex flex-wrap justify-center gap-3 mb-12"
          >
            {categories.map((category) => {
              const Icon = category.icon;
              return (
                <Button
                  key={category.id}
                  variant={activeCategory === category.id ? "default" : "outline"}
                  onClick={() => setActiveCategory(category.id as ResourceCategory | "all")}
                  className="transition-all gap-2"
                  style={{
                    backgroundColor: activeCategory === category.id ? category.color : "transparent",
                    borderColor: category.color,
                    color: activeCategory === category.id ? "white" : category.color,
                  }}
                >
                  <Icon size={18} />
                  {category.label}
                </Button>
              );
            })}
          </motion.div>

          {/* Resources Grid */}
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            {filteredResources.map((resource, index) => {
              const categoryInfo = categories.find(c => c.id === resource.category);
              const Icon = categoryInfo?.icon || FileText;
              
              return (
                <motion.div
                  key={resource.id}
                  initial={{ opacity: 0, y: 30 }}
                  animate={isInView ? { opacity: 1, y: 0 } : {}}
                  transition={{ duration: 0.6, delay: 0.1 * index }}
                  onClick={() => handleResourceClick(resource)}
                >
                  <Card className="h-full hover:shadow-xl transition-shadow cursor-pointer group">
                    <CardHeader>
                      <div className="flex items-start justify-between mb-3">
                        <div 
                          className="w-12 h-12 rounded-lg flex items-center justify-center"
                          style={{ backgroundColor: getCategoryColor(resource.category) }}
                        >
                          <Icon className="text-white" size={24} />
                        </div>
                        <Badge
                          style={{ 
                            backgroundColor: getCategoryColor(resource.category),
                            color: "white"
                          }}
                        >
                          {categoryInfo?.label}
                        </Badge>
                      </div>
                      <CardTitle 
                        className="group-hover:opacity-80 transition-opacity"
                        style={{ color: "var(--deep-tech-blue)" }}
                      >
                        {resource.title}
                      </CardTitle>
                      <CardDescription>{resource.description}</CardDescription>
                    </CardHeader>
                    <CardContent>
                      <div className="flex items-center gap-4 text-sm text-gray-500 mb-4">
                        <span>{resource.pages} pages</span>
                        <span>•</span>
                        <span>{resource.downloadSize}</span>
                        <span>•</span>
                        <span>{resource.publishDate}</span>
                      </div>
                      <Button
                        onClick={(e) => {
                          e.stopPropagation();
                          handleResourceClick(resource);
                        }}
                        className="w-full group/btn"
                        style={{
                          backgroundColor: "var(--sunset-orange)",
                          color: "white"
                        }}
                      >
                        <Download size={18} className="mr-2" />
                        View Details & Download
                      </Button>
                    </CardContent>
                  </Card>
                </motion.div>
              );
            })}
          </div>
        </div>
      </section>

      {/* Download Modal */}
      <DownloadModal
        resource={selectedResource}
        isOpen={isDownloadModalOpen}
        onClose={() => {
          setIsDownloadModalOpen(false);
          setSelectedResource(null);
        }}
      />
    </div>
  );
}

interface DownloadModalProps {
  resource: Resource | null;
  isOpen: boolean;
  onClose: () => void;
}

function DownloadModal({ resource, isOpen, onClose }: DownloadModalProps) {
  const [formData, setFormData] = useState({
    firstName: "",
    lastName: "",
    email: "",
    company: "",
    jobTitle: ""
  });
  const [isSubmitted, setIsSubmitted] = useState(false);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setIsSubmitted(true);
    setTimeout(() => {
      setFormData({
        firstName: "",
        lastName: "",
        email: "",
        company: "",
        jobTitle: ""
      });
      setIsSubmitted(false);
      onClose();
    }, 2500);
  };

  const handleInputChange = (field: string, value: string) => {
    setFormData(prev => ({ ...prev, [field]: value }));
  };

  if (!resource) return null;

  const categoryInfo = categories.find(c => c.id === resource.category);

  return (
    <Dialog open={isOpen} onOpenChange={onClose}>
      <DialogContent className="sm:max-w-2xl max-h-[90vh] overflow-y-auto">
        {!isSubmitted ? (
          <>
            <DialogHeader>
              <div className="flex items-center gap-3 mb-2">
                {categoryInfo && (
                  <div 
                    className="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0"
                    style={{ backgroundColor: categoryInfo.color }}
                  >
                    <categoryInfo.icon className="text-white" size={20} />
                  </div>
                )}
                <div className="flex-1">
                  <DialogTitle
                    className="tracking-tight"
                    style={{ color: "var(--deep-tech-blue)" }}
                  >
                    {resource.title}
                  </DialogTitle>
                  <DialogDescription>
                    {resource.pages} pages • {resource.downloadSize} • {resource.publishDate}
                  </DialogDescription>
                </div>
              </div>
            </DialogHeader>

            <div className="space-y-6">
              {/* Resource Details */}
              <div>
                <h4 className="mb-3" style={{ color: "var(--deep-tech-blue)" }}>
                  What's Inside:
                </h4>
                <ul className="space-y-2">
                  {resource.headlines.map((headline, index) => (
                    <li key={index} className="flex items-start gap-2 text-gray-700">
                      <div 
                        className="w-1.5 h-1.5 rounded-full mt-2 flex-shrink-0"
                        style={{ backgroundColor: categoryInfo?.color }}
                      />
                      <span>{headline}</span>
                    </li>
                  ))}
                </ul>
              </div>

              {/* Download Form */}
              <div 
                className="p-6 rounded-xl"
                style={{ backgroundColor: "var(--accent)" }}
              >
                <h4 className="mb-4" style={{ color: "var(--deep-tech-blue)" }}>
                  Download Your Free Copy
                </h4>
                <form onSubmit={handleSubmit} className="space-y-4">
                  <div className="grid grid-cols-2 gap-4">
                    <div className="space-y-2">
                      <Label htmlFor="firstName">First Name *</Label>
                      <Input
                        id="firstName"
                        value={formData.firstName}
                        onChange={(e) => handleInputChange("firstName", e.target.value)}
                        required
                        placeholder="John"
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
                      <Label htmlFor="lastName">Last Name *</Label>
                      <Input
                        id="lastName"
                        value={formData.lastName}
                        onChange={(e) => handleInputChange("lastName", e.target.value)}
                        required
                        placeholder="Doe"
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
                    <Label htmlFor="email">Email Address *</Label>
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

                  <div className="space-y-2">
                    <Label htmlFor="company">Company</Label>
                    <Input
                      id="company"
                      value={formData.company}
                      onChange={(e) => handleInputChange("company", e.target.value)}
                      placeholder="Your Company"
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
                    <Label htmlFor="jobTitle">Job Title</Label>
                    <Input
                      id="jobTitle"
                      value={formData.jobTitle}
                      onChange={(e) => handleInputChange("jobTitle", e.target.value)}
                      placeholder="e.g., CTO, Product Manager"
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
                    style={{
                      backgroundColor: "var(--sunset-orange)",
                      color: "white"
                    }}
                  >
                    <Download className="mr-2" size={18} />
                    Download Now
                  </Button>

                  <p className="text-xs text-gray-500 text-center">
                    By downloading, you'll receive occasional updates about emerging technologies. 
                    Unsubscribe anytime.
                  </p>
                </form>
              </div>
            </div>
          </>
        ) : (
          <motion.div
            initial={{ opacity: 0, scale: 0.9 }}
            animate={{ opacity: 1, scale: 1 }}
            className="py-12 text-center"
          >
            <div
              className="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6"
              style={{ backgroundColor: "var(--warm-ember)" }}
            >
              <CheckCircle className="text-white" size={40} />
            </div>
            <h3
              className="mb-3 text-2xl"
              style={{ color: "var(--deep-tech-blue)" }}
            >
              Download Starting!
            </h3>
            <p className="text-gray-600 mb-2">
              Your copy of <strong>{resource.title}</strong> is being downloaded.
            </p>
            <p className="text-sm text-gray-500">
              We've also sent a copy to {formData.email}
            </p>
          </motion.div>
        )}
      </DialogContent>
    </Dialog>
  );
}
