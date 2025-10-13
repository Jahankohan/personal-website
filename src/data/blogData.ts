export type BlogCategory = "all" | "future-tech" | "collaboration" | "human-centered" | "remote-dad";

export interface BlogPost {
  id: number;
  title: string;
  excerpt: string;
  category: BlogCategory;
  date: string;
  readTime: string;
  image: string;
  author?: string;
  tags?: string[];
  views?: number;
}

export const blogPosts: BlogPost[] = [
  {
    id: 1,
    title: "The Future of AI: Beyond the Hype",
    excerpt: "Exploring practical applications of artificial intelligence that are reshaping industries today, and what we can expect tomorrow.",
    category: "future-tech",
    date: "September 15, 2025",
    readTime: "8 min read",
    image: "https://images.unsplash.com/photo-1660165458059-57cfb6cc87e5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxBSSUyMHRlY2hub2xvZ3klMjBhYnN0cmFjdHxlbnwxfHx8fDE3NTk0MDExODl8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral",
    tags: ["AI", "Machine Learning", "Future Tech"],
    views: 2450,
  },
  {
    id: 2,
    title: "Building in Public: The Power of Open Collaboration",
    excerpt: "Why transparency and community-driven development are the future of innovation in the tech industry.",
    category: "collaboration",
    date: "September 8, 2025",
    readTime: "6 min read",
    image: "https://images.unsplash.com/photo-1516880711640-ef7db81be3e1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjb2xsYWJvcmF0aW9uJTIwdGVhbXxlbnwxfHx8fDE3NTk0MDExOTB8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral",
    tags: ["Open Source", "Community", "Collaboration"],
    views: 1890,
  },
  {
    id: 3,
    title: "Human-Centered Design in the Age of Automation",
    excerpt: "How to ensure that technology amplifies human capabilities rather than replacing human connection.",
    category: "human-centered",
    date: "September 1, 2025",
    readTime: "10 min read",
    image: "https://images.unsplash.com/photo-1660165458059-57cfb6cc87e5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx0ZWNobm9sb2d5JTIwZnV0dXJlJTIwYWJzdHJhY3R8ZW58MXx8fHwxNzU5MzI1NTQ5fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral",
    tags: ["UX Design", "Human-Centered", "Ethics"],
    views: 3120,
  },
  {
    id: 4,
    title: "Remote Parenting & Tech Leadership",
    excerpt: "Balancing the demands of raising a family while navigating the fast-paced world of emerging technologies.",
    category: "remote-dad",
    date: "August 25, 2025",
    readTime: "5 min read",
    image: "https://images.unsplash.com/photo-1640622304233-7335e936f11b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxmYW1pbHklMjB0ZWNobm9sb2d5fGVufDF8fHx8MTc1OTQwMTE5MXww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral",
    tags: ["Work-Life Balance", "Remote Work", "Parenting"],
    views: 1560,
  },
  {
    id: 5,
    title: "Blockchain Beyond Crypto: Real-World Use Cases",
    excerpt: "Discovering how distributed ledger technology is solving problems in supply chain, healthcare, and beyond.",
    category: "future-tech",
    date: "August 18, 2025",
    readTime: "7 min read",
    image: "https://images.unsplash.com/photo-1639322537504-6427a16b0a28?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxibG9ja2NoYWluJTIwbmV0d29ya3xlbnwxfHx8fDE3NTkzMjk1NzB8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral",
    tags: ["Blockchain", "Web3", "Supply Chain"],
    views: 2780,
  },
  {
    id: 6,
    title: "The Ethics of AI: A Human Perspective",
    excerpt: "Examining the moral implications of artificial intelligence and our responsibility as creators and users.",
    category: "human-centered",
    date: "August 11, 2025",
    readTime: "9 min read",
    image: "https://images.unsplash.com/photo-1660165458059-57cfb6cc87e5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx8fDE3NTkzMjU1NDl8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral",
    tags: ["AI Ethics", "Technology", "Philosophy"],
    views: 2340,
  },
  {
    id: 7,
    title: "Decentralized Autonomous Organizations: The Future of Work",
    excerpt: "Understanding DAOs and how they're revolutionizing organizational structures and decision-making processes.",
    category: "future-tech",
    date: "August 4, 2025",
    readTime: "8 min read",
    image: "https://images.unsplash.com/photo-1639322537504-6427a16b0a28?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxibG9ja2NoYWluJTIwbmV0d29ya3xlbnwxfHx8fDE3NTkzMjk1NzB8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral",
    tags: ["DAO", "Blockchain", "Future of Work"],
    views: 1980,
  },
  {
    id: 8,
    title: "Open Source Contribution: A Beginner's Guide",
    excerpt: "Step-by-step guide to making your first contribution to open source projects and joining the community.",
    category: "collaboration",
    date: "July 28, 2025",
    readTime: "6 min read",
    image: "https://images.unsplash.com/photo-1516880711640-ef7db81be3e1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjb2xsYWJvcmF0aW9uJTIwdGVhbXxlbnwxfHx8fDE3NTk0MDExOTB8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral",
    tags: ["Open Source", "Git", "Development"],
    views: 2120,
  },
  {
    id: 9,
    title: "The Remote Dad's Guide to Quality Time",
    excerpt: "Practical strategies for staying present with your family while managing a demanding tech career.",
    category: "remote-dad",
    date: "July 21, 2025",
    readTime: "5 min read",
    image: "https://images.unsplash.com/photo-1640622304233-7335e936f11b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxmYW1pbHklMjB0ZWNobm9sb2d5fGVufDF8fHx8MTc1OTQwMTE5MXww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral",
    tags: ["Parenting", "Time Management", "Remote Work"],
    views: 1450,
  },
  {
    id: 10,
    title: "Machine Learning for Non-Technical Leaders",
    excerpt: "Understanding ML concepts and their business applications without the complex mathematics.",
    category: "future-tech",
    date: "July 14, 2025",
    readTime: "7 min read",
    image: "https://images.unsplash.com/photo-1660165458059-57cfb6cc87e5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxBSSUyMHRlY2hub2xvZ3klMjBhYnN0cmFjdHxlbnwxfHx8fDE3NTk0MDExODl8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral",
    tags: ["Machine Learning", "Business", "Leadership"],
    views: 2890,
  },
  {
    id: 11,
    title: "Designing for Inclusivity in the Digital Age",
    excerpt: "Creating technology that serves everyone, regardless of ability, background, or access to resources.",
    category: "human-centered",
    date: "July 7, 2025",
    readTime: "9 min read",
    image: "https://images.unsplash.com/photo-1660165458059-57cfb6cc87e5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx8fDE3NTkzMjU1NDl8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral",
    tags: ["Accessibility", "Inclusivity", "Design"],
    views: 1720,
  },
  {
    id: 12,
    title: "Community-Driven Innovation: Case Studies",
    excerpt: "Real-world examples of how community collaboration has led to breakthrough innovations.",
    category: "collaboration",
    date: "June 30, 2025",
    readTime: "10 min read",
    image: "https://images.unsplash.com/photo-1516880711640-ef7db81be3e1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjb2xsYWJvcmF0aW9uJTIwdGVhbXxlbnwxfHx8fDE3NTk0MDExOTB8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral",
    tags: ["Community", "Innovation", "Case Study"],
    views: 1630,
  },
];

export const categories = [
  { id: "all", label: "All Posts", color: "var(--deep-tech-blue)" },
  { id: "future-tech", label: "Future Tech Decoder", color: "var(--electric-cyan)" },
  { id: "collaboration", label: "Open Collaboration", color: "var(--deep-tech-blue)" },
  { id: "human-centered", label: "Human-Centered Innovation", color: "var(--warm-ember)" },
  { id: "remote-dad", label: "Remote Dad Notes", color: "var(--sunset-orange)" },
];

export function getCategoryColor(category: BlogCategory): string {
  return categories.find(c => c.id === category)?.color || "var(--deep-tech-blue)";
}

export function getCategoryLabel(category: BlogCategory): string {
  return categories.find(c => c.id === category)?.label || "Unknown";
}
