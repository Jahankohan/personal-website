import { useState, useRef } from "react";
import { motion, useInView } from "motion/react";
import { Badge } from "./ui/badge";
import { Button } from "./ui/button";
import { Calendar, ArrowRight, BookOpen } from "lucide-react";
import { blogPosts, categories, getCategoryColor, getCategoryLabel, BlogCategory } from "../data/blogData";

export function BlogSection() {
  const [activeCategory, setActiveCategory] = useState<BlogCategory>("all");
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true, amount: 0.2 });

  const filteredPosts = activeCategory === "all" 
    ? blogPosts.slice(0, 6)  // Show only first 6 on homepage
    : blogPosts.filter(post => post.category === activeCategory).slice(0, 6);

  return (
    <section id="blog" ref={ref} className="py-24 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6 }}
          className="text-center mb-12"
        >
          <h2
            className="mb-4 text-4xl sm:text-5xl tracking-tight"
            style={{ color: "var(--deep-tech-blue)" }}
          >
            Latest Insights
          </h2>
          <div
            className="w-24 h-1 mx-auto mb-6"
            style={{ backgroundColor: "var(--warm-ember)" }}
          />
          <p className="text-xl max-w-3xl mx-auto text-gray-700">
            Exploring the intersection of technology, humanity, and the future we're building together.
          </p>
        </motion.div>

        {/* Category Filter */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6, delay: 0.2 }}
          className="flex flex-wrap justify-center gap-3 mb-12"
        >
          {categories.map((category) => (
            <Button
              key={category.id}
              variant={activeCategory === category.id ? "default" : "outline"}
              onClick={() => setActiveCategory(category.id as BlogCategory)}
              className="transition-all"
              style={{
                backgroundColor: activeCategory === category.id ? category.color : "transparent",
                borderColor: category.color,
                color: activeCategory === category.id ? "white" : category.color,
              }}
            >
              {category.label}
            </Button>
          ))}
        </motion.div>

        {/* Blog Posts Grid */}
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
          {filteredPosts.map((post, index) => (
            <motion.article
              key={post.id}
              initial={{ opacity: 0, y: 30 }}
              animate={isInView ? { opacity: 1, y: 0 } : {}}
              transition={{ duration: 0.6, delay: 0.1 * index }}
              className="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group cursor-pointer"
              onClick={() => window.location.hash = `blog/${post.id}`}
            >
              <div className="relative h-48 overflow-hidden">
                <img
                  src={post.image}
                  alt={post.title}
                  className="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                />
                <div className="absolute top-4 left-4">
                  <Badge
                    className="text-white"
                    style={{ backgroundColor: getCategoryColor(post.category) }}
                  >
                    {getCategoryLabel(post.category)}
                  </Badge>
                </div>
              </div>

              <div className="p-6">
                <div className="flex items-center gap-4 mb-3 text-sm text-gray-500">
                  <div className="flex items-center gap-1">
                    <Calendar size={14} />
                    <span>{post.date}</span>
                  </div>
                  <span>•</span>
                  <span>{post.readTime}</span>
                </div>

                <h3
                  className="mb-3 group-hover:opacity-80 transition-opacity"
                  style={{ color: "var(--deep-tech-blue)" }}
                >
                  {post.title}
                </h3>

                <p className="text-gray-600 mb-4">{post.excerpt}</p>

                <button
                  className="inline-flex items-center gap-2 transition-all group-hover:gap-3"
                  style={{ color: "var(--sunset-orange)" }}
                >
                  Read More
                  <ArrowRight size={16} />
                </button>
              </div>
            </motion.article>
          ))}
        </div>

        {/* View All Posts Button */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6, delay: 0.4 }}
          className="text-center mb-16"
        >
          <Button
            size="lg"
            className="text-white"
            style={{ backgroundColor: "var(--sunset-orange)" }}
            onClick={() => window.location.hash = "blog"}
          >
            <BookOpen className="mr-2" size={20} />
            View All {blogPosts.length} Articles
          </Button>
        </motion.div>

        {/* Newsletter Subscription */}
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6, delay: 0.5 }}
          className="p-8 rounded-2xl text-center"
          style={{
            background: "linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple))",
          }}
        >
          <h3 className="text-white mb-4 text-3xl tracking-tight">
            Stay Updated
          </h3>
          <p className="text-white/90 mb-6 max-w-2xl mx-auto">
            Get the latest insights on AI, blockchain, and emerging technologies delivered to your inbox.
          </p>
          <div className="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
            <input
              type="email"
              placeholder="Enter your email"
              className="flex-1 px-4 py-3 rounded-lg outline-none"
              style={{
                backgroundColor: "rgba(255, 255, 255, 0.9)",
              }}
            />
            <Button
              size="lg"
              className="whitespace-nowrap"
              style={{
                backgroundColor: "var(--sunset-orange)",
                color: "white",
              }}
            >
              Subscribe
            </Button>
          </div>
        </motion.div>
      </div>
    </section>
  );
}
