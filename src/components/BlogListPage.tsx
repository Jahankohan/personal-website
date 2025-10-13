import { useState, useMemo, useRef } from "react";
import { motion, useInView } from "motion/react";
import { Button } from "./ui/button";
import { Input } from "./ui/input";
import { Badge } from "./ui/badge";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "./ui/card";
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from "./ui/select";
import {
  Calendar,
  Search,
  Filter,
  ArrowRight,
  Clock,
  TrendingUp,
  BookOpen,
  Eye,
  Grid,
  List,
  X
} from "lucide-react";
import { blogPosts, categories, getCategoryColor, getCategoryLabel, BlogCategory } from "../data/blogData";

type SortOption = "newest" | "oldest" | "popular";
type ViewMode = "grid" | "list";

export function BlogListPage() {
  const [searchQuery, setSearchQuery] = useState("");
  const [activeCategory, setActiveCategory] = useState<BlogCategory>("all");
  const [sortBy, setSortBy] = useState<SortOption>("newest");
  const [viewMode, setViewMode] = useState<ViewMode>("grid");
  const [selectedTags, setSelectedTags] = useState<string[]>([]);
  const [itemsToShow, setItemsToShow] = useState(9);

  const heroRef = useRef(null);
  const statsRef = useRef(null);
  const postsRef = useRef(null);

  const isHeroInView = useInView(heroRef, { once: true, amount: 0.2 });
  const isStatsInView = useInView(statsRef, { once: true, amount: 0.3 });
  const isPostsInView = useInView(postsRef, { once: true, amount: 0.1 });

  // Get all unique tags
  const allTags = useMemo(() => {
    const tags = new Set<string>();
    blogPosts.forEach(post => {
      post.tags?.forEach(tag => tags.add(tag));
    });
    return Array.from(tags);
  }, []);

  // Filter and sort posts
  const filteredAndSortedPosts = useMemo(() => {
    let filtered = blogPosts;

    // Filter by category
    if (activeCategory !== "all") {
      filtered = filtered.filter(post => post.category === activeCategory);
    }

    // Filter by search query
    if (searchQuery) {
      const query = searchQuery.toLowerCase();
      filtered = filtered.filter(
        post =>
          post.title.toLowerCase().includes(query) ||
          post.excerpt.toLowerCase().includes(query) ||
          post.tags?.some(tag => tag.toLowerCase().includes(query))
      );
    }

    // Filter by selected tags
    if (selectedTags.length > 0) {
      filtered = filtered.filter(post =>
        selectedTags.every(tag => post.tags?.includes(tag))
      );
    }

    // Sort
    const sorted = [...filtered];
    if (sortBy === "newest") {
      sorted.sort((a, b) => new Date(b.date).getTime() - new Date(a.date).getTime());
    } else if (sortBy === "oldest") {
      sorted.sort((a, b) => new Date(a.date).getTime() - new Date(b.date).getTime());
    } else if (sortBy === "popular") {
      sorted.sort((a, b) => (b.views || 0) - (a.views || 0));
    }

    return sorted;
  }, [activeCategory, searchQuery, selectedTags, sortBy]);

  const displayedPosts = filteredAndSortedPosts.slice(0, itemsToShow);
  const hasMore = itemsToShow < filteredAndSortedPosts.length;

  const toggleTag = (tag: string) => {
    setSelectedTags(prev =>
      prev.includes(tag) ? prev.filter(t => t !== tag) : [...prev, tag]
    );
  };

  const clearFilters = () => {
    setSearchQuery("");
    setActiveCategory("all");
    setSelectedTags([]);
  };

  const stats = [
    { label: "Total Articles", value: blogPosts.length, icon: BookOpen },
    { label: "Categories", value: categories.length - 1, icon: Filter },
    { label: "Total Reads", value: "25K+", icon: Eye },
    { label: "Monthly Posts", value: "4-6", icon: TrendingUp },
  ];

  return (
    <div className="min-h-screen bg-gray-50">
      {/* Hero Section */}
      <section
        ref={heroRef}
        className="relative py-20 overflow-hidden"
        style={{
          background: "linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple))"
        }}
      >
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <motion.div
            initial={{ opacity: 0, y: 30 }}
            animate={isHeroInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.8 }}
            className="text-center mb-12"
          >
            <h1 className="text-white mb-6 text-4xl sm:text-5xl lg:text-6xl tracking-tight">
              Technology Insights & Perspectives
            </h1>
            <p className="text-white/90 text-xl max-w-3xl mx-auto mb-8">
              Exploring AI, blockchain, human-centered design, and the future we're building together
            </p>
          </motion.div>

          {/* Search and Filter Bar */}
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={isHeroInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.8, delay: 0.2 }}
            className="max-w-4xl mx-auto"
          >
            <div className="bg-white rounded-2xl shadow-2xl p-6">
              <div className="flex flex-col md:flex-row gap-4">
                <div className="flex-1 relative">
                  <Search className="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" size={20} />
                  <Input
                    type="text"
                    placeholder="Search articles, topics, tags..."
                    value={searchQuery}
                    onChange={(e) => setSearchQuery(e.target.value)}
                    className="pl-10 h-12"
                  />
                </div>
                <Select
                  value={sortBy}
                  onValueChange={(value) => setSortBy(value as SortOption)}
                >
                  <SelectTrigger className="w-full md:w-48 h-12">
                    <SelectValue placeholder="Sort by" />
                  </SelectTrigger>
                  <SelectContent>
                    <SelectItem value="newest">Newest First</SelectItem>
                    <SelectItem value="oldest">Oldest First</SelectItem>
                    <SelectItem value="popular">Most Popular</SelectItem>
                  </SelectContent>
                </Select>
              </div>

              {/* Active Filters */}
              {(searchQuery || activeCategory !== "all" || selectedTags.length > 0) && (
                <div className="flex flex-wrap items-center gap-2 mt-4 pt-4 border-t">
                  <span className="text-sm text-gray-600">Active filters:</span>
                  {searchQuery && (
                    <Badge variant="secondary" className="gap-1">
                      Search: {searchQuery}
                      <X
                        size={14}
                        className="cursor-pointer"
                        onClick={() => setSearchQuery("")}
                      />
                    </Badge>
                  )}
                  {activeCategory !== "all" && (
                    <Badge
                      className="gap-1 text-white"
                      style={{ backgroundColor: getCategoryColor(activeCategory) }}
                    >
                      {getCategoryLabel(activeCategory)}
                      <X
                        size={14}
                        className="cursor-pointer"
                        onClick={() => setActiveCategory("all")}
                      />
                    </Badge>
                  )}
                  {selectedTags.map(tag => (
                    <Badge key={tag} variant="secondary" className="gap-1">
                      {tag}
                      <X
                        size={14}
                        className="cursor-pointer"
                        onClick={() => toggleTag(tag)}
                      />
                    </Badge>
                  ))}
                  <Button
                    variant="ghost"
                    size="sm"
                    onClick={clearFilters}
                    className="text-sm"
                  >
                    Clear all
                  </Button>
                </div>
              )}
            </div>
          </motion.div>
        </div>

        {/* Decorative Elements */}
        <div className="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-3xl" />
        <div className="absolute bottom-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl" />
      </section>

      {/* Stats Section */}
      <section ref={statsRef} className="py-12 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-2 md:grid-cols-4 gap-6">
            {stats.map((stat, index) => {
              const Icon = stat.icon;
              return (
                <motion.div
                  key={stat.label}
                  initial={{ opacity: 0, y: 20 }}
                  animate={isStatsInView ? { opacity: 1, y: 0 } : {}}
                  transition={{ duration: 0.6, delay: index * 0.1 }}
                  className="text-center p-6 bg-gray-50 rounded-xl"
                >
                  <Icon
                    className="mx-auto mb-3"
                    size={32}
                    style={{ color: "var(--electric-cyan)" }}
                  />
                  <div className="text-3xl mb-1" style={{ color: "var(--deep-tech-blue)" }}>
                    {stat.value}
                  </div>
                  <div className="text-sm text-gray-600">{stat.label}</div>
                </motion.div>
              );
            })}
          </div>
        </div>
      </section>

      {/* Main Content */}
      <section className="py-12">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          {/* Category Filter */}
          <div className="flex flex-wrap items-center justify-between gap-4 mb-8">
            <div className="flex flex-wrap gap-3">
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
            </div>

            {/* View Toggle */}
            <div className="flex gap-2">
              <Button
                variant={viewMode === "grid" ? "default" : "outline"}
                size="sm"
                onClick={() => setViewMode("grid")}
                style={{
                  backgroundColor: viewMode === "grid" ? "var(--deep-tech-blue)" : "transparent",
                  color: viewMode === "grid" ? "white" : "var(--deep-tech-blue)",
                }}
              >
                <Grid size={18} />
              </Button>
              <Button
                variant={viewMode === "list" ? "default" : "outline"}
                size="sm"
                onClick={() => setViewMode("list")}
                style={{
                  backgroundColor: viewMode === "list" ? "var(--deep-tech-blue)" : "transparent",
                  color: viewMode === "list" ? "white" : "var(--deep-tech-blue)",
                }}
              >
                <List size={18} />
              </Button>
            </div>
          </div>

          {/* Tags Filter */}
          <div className="mb-8">
            <h3 className="mb-4" style={{ color: "var(--deep-tech-blue)" }}>
              Filter by Tags
            </h3>
            <div className="flex flex-wrap gap-2">
              {allTags.map(tag => (
                <Badge
                  key={tag}
                  variant={selectedTags.includes(tag) ? "default" : "outline"}
                  className="cursor-pointer transition-all"
                  style={{
                    backgroundColor: selectedTags.includes(tag) ? "var(--electric-cyan)" : "transparent",
                    borderColor: "var(--electric-cyan)",
                    color: selectedTags.includes(tag) ? "white" : "var(--electric-cyan)",
                  }}
                  onClick={() => toggleTag(tag)}
                >
                  {tag}
                </Badge>
              ))}
            </div>
          </div>

          {/* Results Count */}
          <div className="mb-6">
            <p className="text-gray-600">
              Showing {displayedPosts.length} of {filteredAndSortedPosts.length} articles
            </p>
          </div>

          {/* Blog Posts */}
          <div ref={postsRef}>
            {filteredAndSortedPosts.length === 0 ? (
              <motion.div
                initial={{ opacity: 0 }}
                animate={{ opacity: 1 }}
                className="text-center py-16"
              >
                <BookOpen className="mx-auto mb-4 text-gray-400" size={64} />
                <h3 className="mb-2 text-gray-700">No articles found</h3>
                <p className="text-gray-500 mb-6">
                  Try adjusting your search or filters
                </p>
                <Button onClick={clearFilters}>Clear Filters</Button>
              </motion.div>
            ) : viewMode === "grid" ? (
              <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                {displayedPosts.map((post, index) => (
                  <motion.article
                    key={post.id}
                    initial={{ opacity: 0, y: 30 }}
                    animate={isPostsInView ? { opacity: 1, y: 0 } : {}}
                    transition={{ duration: 0.6, delay: 0.05 * index }}
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
                      {post.views && (
                        <div className="absolute bottom-4 right-4 bg-black/60 backdrop-blur-sm px-3 py-1 rounded-full flex items-center gap-1 text-white text-sm">
                          <Eye size={14} />
                          {post.views.toLocaleString()}
                        </div>
                      )}
                    </div>

                    <div className="p-6">
                      <div className="flex items-center gap-4 mb-3 text-sm text-gray-500">
                        <div className="flex items-center gap-1">
                          <Calendar size={14} />
                          <span>{post.date}</span>
                        </div>
                        <span>•</span>
                        <div className="flex items-center gap-1">
                          <Clock size={14} />
                          <span>{post.readTime}</span>
                        </div>
                      </div>

                      <h3
                        className="mb-3 group-hover:opacity-80 transition-opacity"
                        style={{ color: "var(--deep-tech-blue)" }}
                      >
                        {post.title}
                      </h3>

                      <p className="text-gray-600 mb-4">{post.excerpt}</p>

                      {post.tags && (
                        <div className="flex flex-wrap gap-2 mb-4">
                          {post.tags.slice(0, 3).map(tag => (
                            <Badge key={tag} variant="secondary" className="text-xs">
                              {tag}
                            </Badge>
                          ))}
                        </div>
                      )}

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
            ) : (
              <div className="space-y-6">
                {displayedPosts.map((post, index) => (
                  <motion.article
                    key={post.id}
                    initial={{ opacity: 0, x: -30 }}
                    animate={isPostsInView ? { opacity: 1, x: 0 } : {}}
                    transition={{ duration: 0.6, delay: 0.05 * index }}
                  >
                    <Card
                      className="hover:shadow-xl transition-all cursor-pointer"
                      onClick={() => window.location.hash = `blog/${post.id}`}
                    >
                      <CardContent className="p-0">
                        <div className="flex flex-col md:flex-row gap-6">
                          <div className="md:w-64 h-48 md:h-auto relative overflow-hidden flex-shrink-0">
                            <img
                              src={post.image}
                              alt={post.title}
                              className="w-full h-full object-cover hover:scale-110 transition-transform duration-300"
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

                          <div className="flex-1 p-6 md:py-6">
                            <div className="flex items-center gap-4 mb-3 text-sm text-gray-500">
                              <div className="flex items-center gap-1">
                                <Calendar size={14} />
                                <span>{post.date}</span>
                              </div>
                              <span>•</span>
                              <div className="flex items-center gap-1">
                                <Clock size={14} />
                                <span>{post.readTime}</span>
                              </div>
                              {post.views && (
                                <>
                                  <span>•</span>
                                  <div className="flex items-center gap-1">
                                    <Eye size={14} />
                                    <span>{post.views.toLocaleString()} views</span>
                                  </div>
                                </>
                              )}
                            </div>

                            <h3
                              className="mb-3 hover:opacity-80 transition-opacity"
                              style={{ color: "var(--deep-tech-blue)" }}
                            >
                              {post.title}
                            </h3>

                            <p className="text-gray-600 mb-4">{post.excerpt}</p>

                            {post.tags && (
                              <div className="flex flex-wrap gap-2 mb-4">
                                {post.tags.map(tag => (
                                  <Badge key={tag} variant="secondary" className="text-xs">
                                    {tag}
                                  </Badge>
                                ))}
                              </div>
                            )}

                            <button
                              className="inline-flex items-center gap-2 transition-all hover:gap-3"
                              style={{ color: "var(--sunset-orange)" }}
                            >
                              Read Article
                              <ArrowRight size={16} />
                            </button>
                          </div>
                        </div>
                      </CardContent>
                    </Card>
                  </motion.article>
                ))}
              </div>
            )}
          </div>

          {/* Load More */}
          {hasMore && (
            <motion.div
              initial={{ opacity: 0 }}
              animate={{ opacity: 1 }}
              className="text-center mt-12"
            >
              <Button
                size="lg"
                onClick={() => setItemsToShow(prev => prev + 9)}
                style={{ backgroundColor: "var(--sunset-orange)", color: "white" }}
              >
                Load More Articles
              </Button>
            </motion.div>
          )}
        </div>
      </section>

      {/* Newsletter Section */}
      <section className="py-16 bg-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div
            className="p-12 rounded-2xl text-center"
            style={{
              background: "linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple))",
            }}
          >
            <h3 className="text-white mb-4 text-3xl tracking-tight">
              Never Miss an Insight
            </h3>
            <p className="text-white/90 mb-8 max-w-2xl mx-auto">
              Get the latest articles on AI, blockchain, and emerging technologies delivered directly to your inbox.
            </p>
            <div className="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
              <Input
                type="email"
                placeholder="Enter your email"
                className="flex-1 h-12 bg-white/90"
              />
              <Button
                size="lg"
                className="whitespace-nowrap h-12"
                style={{
                  backgroundColor: "var(--sunset-orange)",
                  color: "white",
                }}
              >
                Subscribe Now
              </Button>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}
