import { useState, useRef } from "react";
import { motion, useInView } from "motion/react";
import { Button } from "./ui/button";
import { Badge } from "./ui/badge";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "./ui/card";
import { Input } from "./ui/input";
import { Label } from "./ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "./ui/select";
import { Separator } from "./ui/separator";
import { Progress } from "./ui/progress";
import { 
  ArrowLeft, 
  Download, 
  FileText, 
  Calendar, 
  File, 
  CheckCircle2,
  TrendingUp,
  Users,
  BarChart3,
  Zap,
  Building2
} from "lucide-react";
import { ImageWithFallback } from "./figma/ImageWithFallback";
import {
  LineChart,
  Line,
  BarChart,
  Bar,
  PieChart,
  Pie,
  Cell,
  XAxis,
  YAxis,
  CartesianGrid,
  Tooltip,
  Legend,
  ResponsiveContainer,
  AreaChart,
  Area
} from "recharts";
import { toast } from "sonner@2.0.3";

interface ResourceData {
  id: string;
  title: string;
  description: string;
  category: string;
  headlines: string[];
  pages: number;
  downloadSize: string;
  publishDate: string;
}

// Sample data for charts
const adoptionData = [
  { month: "Jan", adoption: 35, investment: 45 },
  { month: "Feb", adoption: 42, investment: 52 },
  { month: "Mar", adoption: 48, investment: 58 },
  { month: "Apr", adoption: 55, investment: 65 },
  { month: "May", adoption: 63, investment: 72 },
  { month: "Jun", adoption: 71, investment: 78 },
  { month: "Jul", adoption: 78, investment: 85 },
];

const industryData = [
  { name: "Technology", value: 35, color: "var(--electric-cyan)" },
  { name: "Finance", value: 25, color: "var(--neural-purple)" },
  { name: "Healthcare", value: 20, color: "var(--warm-ember)" },
  { name: "Manufacturing", value: 12, color: "var(--sunset-orange)" },
  { name: "Other", value: 8, color: "var(--deep-tech-blue)" },
];

const challengesData = [
  { challenge: "Skills Gap", percentage: 68 },
  { challenge: "Budget Constraints", percentage: 54 },
  { challenge: "Legacy Systems", percentage: 47 },
  { challenge: "Security Concerns", percentage: 62 },
  { challenge: "Change Resistance", percentage: 51 },
];

const roiData = [
  { quarter: "Q1", roi: 12 },
  { quarter: "Q2", roi: 25 },
  { quarter: "Q3", roi: 38 },
  { quarter: "Q4", roi: 52 },
  { quarter: "Q1 '26", roi: 65 },
  { quarter: "Q2 '26", roi: 78 },
];

const categoryIcons: Record<string, any> = {
  "whitepaper": FileText,
  "survey": BarChart3,
  "market-insights": TrendingUp,
  "future-trends": Zap,
};

const categoryColors: Record<string, string> = {
  "whitepaper": "var(--electric-cyan)",
  "survey": "var(--warm-ember)",
  "market-insights": "var(--neural-purple)",
  "future-trends": "var(--sunset-orange)",
};

// Sample resources data - in a real app, this would come from an API or shared data store
const allResources: Record<string, ResourceData> = {
  "ai-implementation-guide": {
    id: "ai-implementation-guide",
    title: "AI Implementation Guide 2025",
    description: "A comprehensive guide to successfully implementing artificial intelligence in enterprise environments. This guide covers everything from readiness assessment to ROI measurement.",
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
  "blockchain-enterprise": {
    id: "blockchain-enterprise",
    title: "Blockchain for Enterprise: Beyond the Hype",
    description: "Exploring practical applications of blockchain technology in supply chain, finance, and healthcare sectors.",
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
  "tech-readiness-survey": {
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
  "remote-work-technology": {
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
  "ai-market-outlook": {
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
  "blockchain-market-analysis": {
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
  "emerging-tech-2026": {
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
  "human-ai-collaboration": {
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
};

interface ResourceDetailPageProps {
  resourceId: string;
}

export function ResourceDetailPage({ resourceId }: ResourceDetailPageProps) {
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    role: "",
    organization: "",
  });
  const [isSubmitting, setIsSubmitting] = useState(false);
  const contentRef = useRef(null);
  const isInView = useInView(contentRef, { once: true, amount: 0.1 });

  // Get resource from data store or use default
  const resource = allResources[resourceId] || allResources["ai-implementation-guide"];

  const CategoryIcon = categoryIcons[resource.category] || FileText;
  const categoryColor = categoryColors[resource.category] || "var(--deep-tech-blue)";

  const handleInputChange = (field: string, value: string) => {
    setFormData(prev => ({ ...prev, [field]: value }));
  };

  const handleDownload = async (e: React.FormEvent) => {
    e.preventDefault();
    
    if (!formData.name || !formData.email || !formData.role || !formData.organization) {
      toast.error("Please fill in all required fields");
      return;
    }

    setIsSubmitting(true);
    
    // Simulate API call
    await new Promise(resolve => setTimeout(resolve, 1500));
    
    toast.success("Thank you! Your download will start shortly.", {
      description: "We've also sent a copy to your email."
    });
    
    setIsSubmitting(false);
    
    // Reset form
    setFormData({
      name: "",
      email: "",
      role: "",
      organization: "",
    });
  };

  return (
    <div className="min-h-screen bg-gray-50">
      {/* Hero Section */}
      <div 
        className="py-16 relative overflow-hidden"
        style={{
          background: `linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple))`
        }}
      >
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.6 }}
          >
            <Button
              variant="ghost"
              className="text-white hover:bg-white/10 mb-6"
              onClick={() => window.location.hash = "resources"}
            >
              <ArrowLeft className="mr-2" size={18} />
              Back to Resources
            </Button>

            <div className="flex items-center gap-3 mb-6">
              <Badge 
                className="text-white"
                style={{ backgroundColor: categoryColor }}
              >
                <CategoryIcon size={14} className="mr-1" />
                {resource.category.split('-').map(w => w.charAt(0).toUpperCase() + w.slice(1)).join(' ')}
              </Badge>
              <span className="text-white/70">•</span>
              <span className="text-white/90">{resource.pages} pages</span>
              <span className="text-white/70">•</span>
              <span className="text-white/90">{resource.publishDate}</span>
            </div>

            <h1 className="text-white mb-4 text-4xl sm:text-5xl lg:text-6xl tracking-tight max-w-4xl">
              {resource.title}
            </h1>
            
            <p className="text-white/90 text-xl mb-8 max-w-3xl">
              {resource.description}
            </p>

            <div className="flex flex-wrap gap-4">
              <div className="flex items-center gap-2 text-white/90">
                <File size={20} />
                <span>{resource.downloadSize} PDF</span>
              </div>
              <div className="flex items-center gap-2 text-white/90">
                <Calendar size={20} />
                <span>Updated {resource.publishDate}</span>
              </div>
              <div className="flex items-center gap-2 text-white/90">
                <Download size={20} />
                <span>Instant Download</span>
              </div>
            </div>
          </motion.div>
        </div>
      </div>

      {/* Main Content */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div className="grid lg:grid-cols-3 gap-8">
          {/* Left Column - Content */}
          <motion.div
            ref={contentRef}
            initial={{ opacity: 0, y: 20 }}
            animate={isInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.6 }}
            className="lg:col-span-2 space-y-8"
          >
            {/* What's Inside */}
            <Card>
              <CardHeader>
                <CardTitle style={{ color: "var(--deep-tech-blue)" }}>
                  What's Inside
                </CardTitle>
                <CardDescription>
                  Key topics and insights covered in this resource
                </CardDescription>
              </CardHeader>
              <CardContent>
                <div className="space-y-3">
                  {resource.headlines.map((headline, index) => (
                    <motion.div
                      key={index}
                      initial={{ opacity: 0, x: -20 }}
                      animate={isInView ? { opacity: 1, x: 0 } : {}}
                      transition={{ duration: 0.4, delay: index * 0.1 }}
                      className="flex items-start gap-3"
                    >
                      <CheckCircle2 
                        size={20} 
                        className="mt-0.5 flex-shrink-0"
                        style={{ color: categoryColor }}
                      />
                      <p className="text-gray-700">{headline}</p>
                    </motion.div>
                  ))}
                </div>
              </CardContent>
            </Card>

            {/* Key Statistics */}
            <Card>
              <CardHeader>
                <CardTitle style={{ color: "var(--deep-tech-blue)" }}>
                  Key Statistics & Insights
                </CardTitle>
                <CardDescription>
                  Data-driven insights from our research
                </CardDescription>
              </CardHeader>
              <CardContent className="space-y-8">
                {/* Stat Cards */}
                <div className="grid sm:grid-cols-3 gap-4">
                  <motion.div
                    initial={{ opacity: 0, y: 20 }}
                    animate={isInView ? { opacity: 1, y: 0 } : {}}
                    transition={{ delay: 0.2 }}
                    className="p-4 rounded-lg text-center"
                    style={{ backgroundColor: "var(--electric-cyan)", opacity: 0.1 }}
                  >
                    <div className="text-3xl mb-2" style={{ color: "var(--electric-cyan)" }}>
                      78%
                    </div>
                    <div className="text-sm text-gray-600">Adoption Rate</div>
                  </motion.div>
                  <motion.div
                    initial={{ opacity: 0, y: 20 }}
                    animate={isInView ? { opacity: 1, y: 0 } : {}}
                    transition={{ delay: 0.3 }}
                    className="p-4 rounded-lg text-center"
                    style={{ backgroundColor: "var(--neural-purple)", opacity: 0.1 }}
                  >
                    <div className="text-3xl mb-2" style={{ color: "var(--neural-purple)" }}>
                      $2.4M
                    </div>
                    <div className="text-sm text-gray-600">Avg. ROI</div>
                  </motion.div>
                  <motion.div
                    initial={{ opacity: 0, y: 20 }}
                    animate={isInView ? { opacity: 1, y: 0 } : {}}
                    transition={{ delay: 0.4 }}
                    className="p-4 rounded-lg text-center"
                    style={{ backgroundColor: "var(--warm-ember)", opacity: 0.1 }}
                  >
                    <div className="text-3xl mb-2" style={{ color: "var(--warm-ember)" }}>
                      500+
                    </div>
                    <div className="text-sm text-gray-600">Organizations</div>
                  </motion.div>
                </div>

                {/* Adoption Trend Chart */}
                <div>
                  <h4 className="mb-4" style={{ color: "var(--deep-tech-blue)" }}>
                    Technology Adoption & Investment Trend
                  </h4>
                  <ResponsiveContainer width="100%" height={250}>
                    <AreaChart data={adoptionData}>
                      <CartesianGrid strokeDasharray="3 3" stroke="#E5E7EB" />
                      <XAxis dataKey="month" stroke="#6B7280" />
                      <YAxis stroke="#6B7280" />
                      <Tooltip />
                      <Legend />
                      <Area 
                        type="monotone" 
                        dataKey="adoption" 
                        stackId="1"
                        stroke="var(--electric-cyan)" 
                        fill="var(--electric-cyan)"
                        fillOpacity={0.6}
                        name="Adoption (%)"
                      />
                      <Area 
                        type="monotone" 
                        dataKey="investment" 
                        stackId="2"
                        stroke="var(--neural-purple)" 
                        fill="var(--neural-purple)"
                        fillOpacity={0.6}
                        name="Investment (%)"
                      />
                    </AreaChart>
                  </ResponsiveContainer>
                </div>

                {/* Industry Distribution */}
                <div className="grid md:grid-cols-2 gap-6">
                  <div>
                    <h4 className="mb-4" style={{ color: "var(--deep-tech-blue)" }}>
                      Industry Distribution
                    </h4>
                    <ResponsiveContainer width="100%" height={200}>
                      <PieChart>
                        <Pie
                          data={industryData}
                          cx="50%"
                          cy="50%"
                          innerRadius={50}
                          outerRadius={80}
                          paddingAngle={5}
                          dataKey="value"
                        >
                          {industryData.map((entry, index) => (
                            <Cell key={`cell-${index}`} fill={entry.color} />
                          ))}
                        </Pie>
                        <Tooltip />
                      </PieChart>
                    </ResponsiveContainer>
                    <div className="mt-4 space-y-2">
                      {industryData.map((item, index) => (
                        <div key={index} className="flex items-center justify-between text-sm">
                          <div className="flex items-center gap-2">
                            <div 
                              className="w-3 h-3 rounded-full" 
                              style={{ backgroundColor: item.color }}
                            />
                            <span className="text-gray-700">{item.name}</span>
                          </div>
                          <span className="text-gray-600">{item.value}%</span>
                        </div>
                      ))}
                    </div>
                  </div>

                  <div>
                    <h4 className="mb-4" style={{ color: "var(--deep-tech-blue)" }}>
                      ROI Timeline
                    </h4>
                    <ResponsiveContainer width="100%" height={200}>
                      <BarChart data={roiData}>
                        <CartesianGrid strokeDasharray="3 3" stroke="#E5E7EB" />
                        <XAxis dataKey="quarter" stroke="#6B7280" />
                        <YAxis stroke="#6B7280" />
                        <Tooltip />
                        <Bar dataKey="roi" fill="var(--warm-ember)" radius={[8, 8, 0, 0]} />
                      </BarChart>
                    </ResponsiveContainer>
                  </div>
                </div>

                {/* Implementation Challenges */}
                <div>
                  <h4 className="mb-4" style={{ color: "var(--deep-tech-blue)" }}>
                    Top Implementation Challenges
                  </h4>
                  <div className="space-y-4">
                    {challengesData.map((item, index) => (
                      <div key={index}>
                        <div className="flex justify-between mb-2">
                          <span className="text-sm text-gray-700">{item.challenge}</span>
                          <span className="text-sm" style={{ color: categoryColor }}>
                            {item.percentage}%
                          </span>
                        </div>
                        <Progress 
                          value={item.percentage} 
                          className="h-2"
                          style={{
                            backgroundColor: "#E5E7EB",
                          }}
                        />
                      </div>
                    ))}
                  </div>
                </div>
              </CardContent>
            </Card>

            {/* Who Should Read This */}
            <Card>
              <CardHeader>
                <CardTitle style={{ color: "var(--deep-tech-blue)" }}>
                  Who Should Read This
                </CardTitle>
              </CardHeader>
              <CardContent>
                <div className="grid sm:grid-cols-2 gap-4">
                  {[
                    "CTOs & Technology Leaders",
                    "Digital Transformation Officers",
                    "Innovation Managers",
                    "Business Strategists",
                    "Product Managers",
                    "Consultants & Advisors"
                  ].map((role, index) => (
                    <div 
                      key={index}
                      className="flex items-center gap-2 text-gray-700"
                    >
                      <Users size={16} style={{ color: categoryColor }} />
                      <span>{role}</span>
                    </div>
                  ))}
                </div>
              </CardContent>
            </Card>
          </motion.div>

          {/* Right Column - Download Form */}
          <motion.div
            initial={{ opacity: 0, x: 20 }}
            animate={isInView ? { opacity: 1, x: 0 } : {}}
            transition={{ duration: 0.6, delay: 0.2 }}
            className="lg:col-span-1"
          >
            <div className="sticky top-24">
              <Card className="shadow-xl">
                <CardHeader>
                  <CardTitle style={{ color: "var(--deep-tech-blue)" }}>
                    Download This Resource
                  </CardTitle>
                  <CardDescription>
                    Fill in your details to get instant access
                  </CardDescription>
                </CardHeader>
                <CardContent>
                  <form onSubmit={handleDownload} className="space-y-4">
                    <div>
                      <Label htmlFor="name">Full Name *</Label>
                      <Input
                        id="name"
                        type="text"
                        placeholder="John Doe"
                        value={formData.name}
                        onChange={(e) => handleInputChange("name", e.target.value)}
                        required
                      />
                    </div>

                    <div>
                      <Label htmlFor="email">Email Address *</Label>
                      <Input
                        id="email"
                        type="email"
                        placeholder="john@company.com"
                        value={formData.email}
                        onChange={(e) => handleInputChange("email", e.target.value)}
                        required
                      />
                    </div>

                    <div>
                      <Label htmlFor="role">Your Role *</Label>
                      <Select 
                        value={formData.role}
                        onValueChange={(value) => handleInputChange("role", value)}
                        required
                      >
                        <SelectTrigger id="role">
                          <SelectValue placeholder="Select your role" />
                        </SelectTrigger>
                        <SelectContent>
                          <SelectItem value="cto">CTO / Technology Leader</SelectItem>
                          <SelectItem value="ceo">CEO / Founder</SelectItem>
                          <SelectItem value="product">Product Manager</SelectItem>
                          <SelectItem value="innovation">Innovation Manager</SelectItem>
                          <SelectItem value="consultant">Consultant</SelectItem>
                          <SelectItem value="developer">Developer</SelectItem>
                          <SelectItem value="other">Other</SelectItem>
                        </SelectContent>
                      </Select>
                    </div>

                    <div>
                      <Label htmlFor="organization">Organization *</Label>
                      <Input
                        id="organization"
                        type="text"
                        placeholder="Company name"
                        value={formData.organization}
                        onChange={(e) => handleInputChange("organization", e.target.value)}
                        required
                      />
                    </div>

                    <Separator className="my-4" />

                    <Button
                      type="submit"
                      className="w-full text-white"
                      size="lg"
                      disabled={isSubmitting}
                      style={{
                        backgroundColor: "var(--sunset-orange)",
                      }}
                    >
                      {isSubmitting ? (
                        "Processing..."
                      ) : (
                        <>
                          <Download className="mr-2" size={18} />
                          Download Now
                        </>
                      )}
                    </Button>

                    <p className="text-xs text-gray-500 text-center">
                      By downloading, you agree to receive occasional emails about our resources and services. 
                      You can unsubscribe anytime.
                    </p>
                  </form>
                </CardContent>
              </Card>

              {/* Quick Info */}
              <Card className="mt-4">
                <CardContent className="pt-6">
                  <div className="space-y-3 text-sm">
                    <div className="flex items-center gap-2 text-gray-700">
                      <File size={16} style={{ color: categoryColor }} />
                      <span>{resource.pages} pages of insights</span>
                    </div>
                    <div className="flex items-center gap-2 text-gray-700">
                      <Download size={16} style={{ color: categoryColor }} />
                      <span>Instant PDF download</span>
                    </div>
                    <div className="flex items-center gap-2 text-gray-700">
                      <CheckCircle2 size={16} style={{ color: categoryColor }} />
                      <span>100% free, no payment required</span>
                    </div>
                    <div className="flex items-center gap-2 text-gray-700">
                      <Building2 size={16} style={{ color: categoryColor }} />
                      <span>Trusted by 500+ organizations</span>
                    </div>
                  </div>
                </CardContent>
              </Card>
            </div>
          </motion.div>
        </div>
      </div>
    </div>
  );
}
