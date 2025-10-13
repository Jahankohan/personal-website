import { useState, useRef } from "react";
import { motion, useInView } from "motion/react";
import { Button } from "./ui/button";
import { Badge } from "./ui/badge";
import { Avatar, AvatarFallback, AvatarImage } from "./ui/avatar";
import { Separator } from "./ui/separator";
import { Input } from "./ui/input";
import { Textarea } from "./ui/textarea";
import { TweetEmbed, LinkedInPostEmbed } from "./SocialMediaEmbeds";
import { 
  Clock, 
  Calendar, 
  User, 
  Tag, 
  Share2, 
  Bookmark, 
  ThumbsUp,
  MessageCircle,
  ArrowLeft,
  Twitter,
  Linkedin,
  Facebook
} from "lucide-react";
import { ImageWithFallback } from "./figma/ImageWithFallback";

interface BlogPost {
  id: string;
  title: string;
  subtitle: string;
  category: "future-tech" | "open-collaboration" | "human-centered" | "remote-dad";
  tags: string[];
  author: {
    name: string;
    avatar: string;
    bio: string;
  };
  publishDate: string;
  readTime: number;
  coverImage: string;
  content: Array<{
    type: "paragraph" | "heading" | "quote" | "image" | "tweet" | "linkedin";
    data: any;
  }>;
}

const samplePost: BlogPost = {
  id: "ai-implementation-2025",
  title: "The Human Side of AI Implementation: Lessons from the Field",
  subtitle: "Why successful AI adoption is 80% people and 20% technology",
  category: "human-centered",
  tags: ["AI", "Change Management", "Leadership", "Technology Adoption", "Innovation"],
  author: {
    name: "Alex Thompson",
    avatar: "https://images.unsplash.com/photo-1425421669292-0c3da3b8f529?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxidXNpbmVzcyUyMHBlcnNvbiUyMHByb2Zlc3Npb25hbHxlbnwxfHx8fDE3NTkyODc1NzN8MA&ixlib=rb-4.1.0&q=80&w=1080",
    bio: "Technology strategist bridging the gap between innovation and human impact. Father, writer, and eternal optimist about our technological future."
  },
  publishDate: "October 1, 2025",
  readTime: 8,
  coverImage: "https://images.unsplash.com/photo-1696258687323-495eb76047ca?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxBSSUyMHRlY2hub2xvZ3klMjBmdXR1cmV8ZW58MXx8fHwxNzU5MjQ1NjA3fDA&ixlib=rb-4.1.0&q=80&w=1080",
  content: [
    {
      type: "paragraph",
      data: "After helping dozens of organizations implement AI solutions over the past three years, I've noticed a pattern: the companies that succeed aren't necessarily the ones with the biggest budgets or the most sophisticated models. They're the ones that understand AI implementation is fundamentally a human challenge."
    },
    {
      type: "heading",
      data: "The 80/20 Rule Nobody Talks About"
    },
    {
      type: "paragraph",
      data: "We love to talk about algorithms, training data, and model architectures. But here's what I've learned: successful AI implementation is 80% change management and only 20% technology. The technical part? That's often the easy part. The hard part is getting people to trust, adopt, and effectively use these systems."
    },
    {
      type: "quote",
      data: "Technology is nothing. What's important is that you have faith in people, that they're basically good and smart, and if you give them tools, they'll do wonderful things with them."
    },
    {
      type: "paragraph",
      data: "I recently spoke with a CTO who shared their experience implementing AI across their organization. Here's what they had to say:"
    },
    {
      type: "linkedin",
      data: {
        author: {
          name: "Sarah Chen",
          title: "CTO at TechForward Inc. | AI Implementation Leader",
          avatar: "https://images.unsplash.com/photo-1425421669292-0c3da3b8f529?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxidXNpbmVzcyUyMHBlcnNvbiUyMHByb2Zlc3Npb25hbHxlbnwxfHx8fDE3NTkyODc1NzN8MA&ixlib=rb-4.1.0&q=80&w=200"
        },
        content: "After 18 months of AI implementation, here's what surprised me most:\n\nWe spent 6 months choosing the perfect AI solution.\nWe spent 12 months getting people to actually use it.\n\nThe lesson? Start with your people, not your technology. Understanding workflows, fears, and motivations matters more than features and capabilities.\n\n#AIImplementation #ChangeManagement #Leadership",
        timestamp: "2w ago",
        likes: 847,
        comments: 92,
        reposts: 156
      }
    },
    {
      type: "heading",
      data: "Three Key Principles for Human-Centered AI"
    },
    {
      type: "paragraph",
      data: "Based on my experience, here are three principles that separate successful AI implementations from failed ones:"
    },
    {
      type: "paragraph",
      data: "1. **Start with the Problem, Not the Technology**: I've seen too many organizations fall in love with AI and go looking for problems to solve. The most successful implementations start by deeply understanding a human problem, then evaluate whether AI is the right solution."
    },
    {
      type: "paragraph",
      data: "2. **Design for Transparency**: People need to understand how AI systems make decisions, especially when those decisions affect them. Black boxes create fear and resistance. Transparency builds trust."
    },
    {
      type: "paragraph",
      data: "3. **Involve Users Early and Often**: The people who will use your AI system daily know things you don't. Their insights are invaluable, and their buy-in is essential."
    },
    {
      type: "image",
      data: {
        url: "https://images.unsplash.com/photo-1694219782948-afcab5c095d3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxibG9ja2NoYWluJTIwdGVjaG5vbG9neXxlbnwxfHx8fDE3NTkyNjU3NDR8MA&ixlib=rb-4.1.0&q=80&w=1080",
        caption: "Technology should augment human capabilities, not replace human judgment"
      }
    },
    {
      type: "heading",
      data: "Real-World Impact"
    },
    {
      type: "paragraph",
      data: "One of my favorite success stories comes from a healthcare organization that implemented an AI diagnostic assistant. Instead of positioning it as a replacement for doctors, they framed it as a second opinion tool—something that could help catch what a tired human might miss."
    },
    {
      type: "tweet",
      data: {
        author: {
          name: "Dr. James Martinez",
          handle: "DrJMartinez",
          avatar: "https://images.unsplash.com/photo-1425421669292-0c3da3b8f529?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxidXNpbmVzcyUyMHBlcnNvbiUyMHByb2Zlc3Npb25hbHxlbnwxfHx8fDE3NTkyODc1NzN8MA&ixlib=rb-4.1.0&q=80&w=200",
          verified: true
        },
        content: "Been using the new AI diagnostic assistant for 3 months now. \n\nNot gonna lie, I was skeptical at first. But it's caught 2 cases I initially missed. \n\nIt's not about replacing doctors—it's about giving us better tools to help our patients. \n\nThis is the future of medicine. 🏥",
        timestamp: "3:42 PM · Sep 15, 2025",
        likes: 2847,
        retweets: 421,
        replies: 186
      }
    },
    {
      type: "paragraph",
      data: "The result? Adoption rates exceeded expectations, and within six months, the tool had contributed to improved diagnostic accuracy across the board. The key was framing it as augmentation, not replacement."
    },
    {
      type: "heading",
      data: "Looking Forward"
    },
    {
      type: "paragraph",
      data: "As we move deeper into the AI era, the organizations that will thrive are those that remember technology serves people, not the other way around. The future isn't about choosing between humans and AI—it's about creating systems where both work together, each doing what they do best."
    },
    {
      type: "paragraph",
      data: "What's your experience with AI implementation? I'd love to hear your stories in the comments below."
    }
  ]
};

const categoryColors: Record<string, { bg: string; text: string }> = {
  "future-tech": { bg: "var(--electric-cyan)", text: "white" },
  "open-collaboration": { bg: "var(--warm-ember)", text: "white" },
  "human-centered": { bg: "var(--neural-purple)", text: "white" },
  "remote-dad": { bg: "var(--sunset-orange)", text: "white" }
};

const categoryLabels: Record<string, string> = {
  "future-tech": "Future Tech Decoder",
  "open-collaboration": "Open Collaboration",
  "human-centered": "Human-Centered Innovation",
  "remote-dad": "Remote Dad Notes"
};

export function BlogPostPage() {
  const [comment, setComment] = useState("");
  const [name, setName] = useState("");
  const [email, setEmail] = useState("");
  const [comments, setComments] = useState([
    {
      id: "1",
      author: "Michael Roberts",
      avatar: "https://images.unsplash.com/photo-1425421669292-0c3da3b8f529?w=100",
      content: "This resonates so much with my experience. We implemented an AI chatbot last year and the technical setup took 2 weeks. Getting the team comfortable using it took 6 months!",
      timestamp: "2 days ago",
      likes: 12
    },
    {
      id: "2",
      author: "Lisa Wang",
      avatar: "https://images.unsplash.com/photo-1425421669292-0c3da3b8f529?w=100",
      content: "The transparency point is crucial. We found that explaining how our AI makes decisions reduced resistance by over 60%. People just want to understand what's happening.",
      timestamp: "1 day ago",
      likes: 8
    }
  ]);
  const [likes, setLikes] = useState(156);
  const [isLiked, setIsLiked] = useState(false);
  const [isBookmarked, setIsBookmarked] = useState(false);

  const contentRef = useRef(null);
  const isInView = useInView(contentRef, { once: true, amount: 0.1 });

  const handleCommentSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    if (comment.trim() && name.trim()) {
      setComments([
        ...comments,
        {
          id: Date.now().toString(),
          author: name,
          avatar: "https://images.unsplash.com/photo-1425421669292-0c3da3b8f529?w=100",
          content: comment,
          timestamp: "Just now",
          likes: 0
        }
      ]);
      setComment("");
      setName("");
      setEmail("");
    }
  };

  const handleLike = () => {
    setIsLiked(!isLiked);
    setLikes(isLiked ? likes - 1 : likes + 1);
  };

  const renderContent = (item: any, index: number) => {
    switch (item.type) {
      case "paragraph":
        return (
          <p key={index} className="mb-6 text-gray-700 leading-relaxed">
            {item.data}
          </p>
        );
      case "heading":
        return (
          <h2 
            key={index} 
            className="mt-12 mb-6 text-3xl"
            style={{ color: "var(--deep-tech-blue)" }}
          >
            {item.data}
          </h2>
        );
      case "quote":
        return (
          <blockquote 
            key={index}
            className="my-8 pl-6 border-l-4 italic text-xl text-gray-700"
            style={{ borderColor: "var(--neural-purple)" }}
          >
            {item.data}
          </blockquote>
        );
      case "image":
        return (
          <figure key={index} className="my-8">
            <ImageWithFallback 
              src={item.data.url}
              alt={item.data.caption}
              className="w-full rounded-xl"
            />
            {item.data.caption && (
              <figcaption className="text-center text-sm text-gray-600 mt-3">
                {item.data.caption}
              </figcaption>
            )}
          </figure>
        );
      case "tweet":
        return <TweetEmbed key={index} {...item.data} />;
      case "linkedin":
        return <LinkedInPostEmbed key={index} {...item.data} />;
      default:
        return null;
    }
  };

  return (
    <div className="min-h-screen bg-gray-50">
      {/* Hero Section */}
      <div className="relative h-[60vh] min-h-[500px] overflow-hidden">
        <ImageWithFallback
          src={samplePost.coverImage}
          alt={samplePost.title}
          className="absolute inset-0 w-full h-full object-cover"
        />
        <div className="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent" />
        
        <div className="absolute inset-0 flex items-end">
          <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-12 w-full">
            <motion.div
              initial={{ opacity: 0, y: 30 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.8 }}
            >
              <Button
                variant="ghost"
                className="text-white hover:bg-white/10 mb-6"
                onClick={() => window.history.back()}
              >
                <ArrowLeft className="mr-2" size={18} />
                Back to Blog
              </Button>

              <Badge 
                className="mb-4"
                style={{
                  backgroundColor: categoryColors[samplePost.category].bg,
                  color: categoryColors[samplePost.category].text
                }}
              >
                {categoryLabels[samplePost.category]}
              </Badge>

              <h1 className="text-white text-4xl sm:text-5xl lg:text-6xl mb-4 max-w-4xl tracking-tight">
                {samplePost.title}
              </h1>
              
              <p className="text-white/90 text-xl mb-6 max-w-3xl">
                {samplePost.subtitle}
              </p>

              <div className="flex flex-wrap items-center gap-6 text-white/80 text-sm">
                <div className="flex items-center gap-2">
                  <Calendar size={16} />
                  {samplePost.publishDate}
                </div>
                <div className="flex items-center gap-2">
                  <Clock size={16} />
                  {samplePost.readTime} min read
                </div>
                <div className="flex items-center gap-2">
                  <User size={16} />
                  {samplePost.author.name}
                </div>
              </div>
            </motion.div>
          </div>
        </div>
      </div>

      {/* Article Content */}
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div className="grid lg:grid-cols-4 gap-8">
          {/* Sidebar */}
          <div className="lg:col-span-1 order-2 lg:order-1">
            <div className="sticky top-24 space-y-6">
              {/* Author Card */}
              <motion.div
                initial={{ opacity: 0, x: -20 }}
                animate={{ opacity: 1, x: 0 }}
                transition={{ delay: 0.2 }}
                className="bg-white rounded-xl p-6 shadow-sm"
              >
                <div className="text-center">
                  <Avatar className="w-20 h-20 mx-auto mb-4">
                    <AvatarImage src={samplePost.author.avatar} />
                    <AvatarFallback>AT</AvatarFallback>
                  </Avatar>
                  <h3 className="mb-2" style={{ color: "var(--deep-tech-blue)" }}>
                    {samplePost.author.name}
                  </h3>
                  <p className="text-sm text-gray-600 mb-4">{samplePost.author.bio}</p>
                  <div className="flex justify-center gap-2">
                    <Button variant="outline" size="icon">
                      <Twitter size={16} />
                    </Button>
                    <Button variant="outline" size="icon">
                      <Linkedin size={16} />
                    </Button>
                  </div>
                </div>
              </motion.div>

              {/* Actions */}
              <motion.div
                initial={{ opacity: 0, x: -20 }}
                animate={{ opacity: 1, x: 0 }}
                transition={{ delay: 0.3 }}
                className="bg-white rounded-xl p-4 shadow-sm space-y-2"
              >
                <Button
                  variant="ghost"
                  className="w-full justify-start"
                  onClick={handleLike}
                  style={{ color: isLiked ? "var(--sunset-orange)" : "inherit" }}
                >
                  <ThumbsUp size={18} className="mr-2" fill={isLiked ? "currentColor" : "none"} />
                  {likes} Likes
                </Button>
                <Button
                  variant="ghost"
                  className="w-full justify-start"
                  onClick={() => setIsBookmarked(!isBookmarked)}
                  style={{ color: isBookmarked ? "var(--neural-purple)" : "inherit" }}
                >
                  <Bookmark size={18} className="mr-2" fill={isBookmarked ? "currentColor" : "none"} />
                  Save
                </Button>
                <Button variant="ghost" className="w-full justify-start">
                  <Share2 size={18} className="mr-2" />
                  Share
                </Button>
              </motion.div>

              {/* Tags */}
              <motion.div
                initial={{ opacity: 0, x: -20 }}
                animate={{ opacity: 1, x: 0 }}
                transition={{ delay: 0.4 }}
                className="bg-white rounded-xl p-6 shadow-sm"
              >
                <div className="flex items-center gap-2 mb-4">
                  <Tag size={18} style={{ color: "var(--deep-tech-blue)" }} />
                  <h4 style={{ color: "var(--deep-tech-blue)" }}>Tags</h4>
                </div>
                <div className="flex flex-wrap gap-2">
                  {samplePost.tags.map((tag) => (
                    <Badge 
                      key={tag} 
                      variant="outline"
                      className="cursor-pointer hover:bg-gray-100"
                    >
                      {tag}
                    </Badge>
                  ))}
                </div>
              </motion.div>
            </div>
          </div>

          {/* Main Content */}
          <motion.div
            ref={contentRef}
            initial={{ opacity: 0, y: 20 }}
            animate={isInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.6 }}
            className="lg:col-span-3 order-1 lg:order-2"
          >
            <div className="bg-white rounded-xl p-8 lg:p-12 shadow-sm mb-8">
              {samplePost.content.map((item, index) => renderContent(item, index))}

              <Separator className="my-12" />

              {/* Share Section */}
              <div className="flex items-center justify-between flex-wrap gap-4">
                <div className="flex items-center gap-4">
                  <span className="text-gray-600">Share this article:</span>
                  <div className="flex gap-2">
                    <Button size="icon" variant="outline">
                      <Twitter size={18} />
                    </Button>
                    <Button size="icon" variant="outline">
                      <Linkedin size={18} />
                    </Button>
                    <Button size="icon" variant="outline">
                      <Facebook size={18} />
                    </Button>
                  </div>
                </div>
                <Button
                  onClick={handleLike}
                  style={{ 
                    backgroundColor: isLiked ? "var(--sunset-orange)" : "transparent",
                    color: isLiked ? "white" : "var(--deep-tech-blue)",
                    borderColor: "var(--deep-tech-blue)"
                  }}
                  variant={isLiked ? "default" : "outline"}
                >
                  <ThumbsUp size={18} className="mr-2" fill={isLiked ? "currentColor" : "none"} />
                  {isLiked ? "Liked" : "Like"} ({likes})
                </Button>
              </div>
            </div>

            {/* Comments Section */}
            <div className="bg-white rounded-xl p-8 lg:p-12 shadow-sm">
              <div className="flex items-center gap-2 mb-8">
                <MessageCircle size={24} style={{ color: "var(--deep-tech-blue)" }} />
                <h2 style={{ color: "var(--deep-tech-blue)" }}>
                  Comments ({comments.length})
                </h2>
              </div>

              {/* Comment Form */}
              <form onSubmit={handleCommentSubmit} className="mb-12">
                <div className="grid sm:grid-cols-2 gap-4 mb-4">
                  <div>
                    <Input
                      placeholder="Your Name *"
                      value={name}
                      onChange={(e) => setName(e.target.value)}
                      required
                    />
                  </div>
                  <div>
                    <Input
                      type="email"
                      placeholder="Your Email"
                      value={email}
                      onChange={(e) => setEmail(e.target.value)}
                    />
                  </div>
                </div>
                <Textarea
                  placeholder="Share your thoughts..."
                  value={comment}
                  onChange={(e) => setComment(e.target.value)}
                  className="mb-4 min-h-[100px]"
                  required
                />
                <Button 
                  type="submit"
                  style={{
                    backgroundColor: "var(--sunset-orange)",
                    color: "white"
                  }}
                >
                  Post Comment
                </Button>
              </form>

              {/* Comments List */}
              <div className="space-y-6">
                {comments.map((comment) => (
                  <motion.div
                    key={comment.id}
                    initial={{ opacity: 0, y: 20 }}
                    animate={{ opacity: 1, y: 0 }}
                    className="flex gap-4"
                  >
                    <Avatar>
                      <AvatarImage src={comment.avatar} />
                      <AvatarFallback>{comment.author[0]}</AvatarFallback>
                    </Avatar>
                    <div className="flex-1">
                      <div className="flex items-center gap-2 mb-2">
                        <span className="text-gray-900">{comment.author}</span>
                        <span className="text-sm text-gray-500">• {comment.timestamp}</span>
                      </div>
                      <p className="text-gray-700 mb-2">{comment.content}</p>
                      <Button variant="ghost" size="sm" className="text-gray-500 hover:text-gray-700">
                        <ThumbsUp size={14} className="mr-1" />
                        {comment.likes > 0 && comment.likes}
                      </Button>
                    </div>
                  </motion.div>
                ))}
              </div>
            </div>
          </motion.div>
        </div>
      </div>
    </div>
  );
}
