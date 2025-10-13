import { useState, useEffect } from "react";
import { Navigation } from "./components/Navigation";
import { HeroSection } from "./components/HeroSection";
import { AboutSection } from "./components/AboutSection";
import { AboutMePage } from "./components/AboutMePage";
import { BlogSection } from "./components/BlogSection";
import { BlogListPage } from "./components/BlogListPage";
import { BookSection } from "./components/BookSection";
import { BookDetailPage } from "./components/BookDetailPage";
import { LinkHubPage } from "./components/LinkHubPage";
import { ContactSection } from "./components/ContactSection";
import { ResourcesPage } from "./components/ResourcesPage";
import { ResourceDetailPage } from "./components/ResourceDetailPage";
import { BlogPostPage } from "./components/BlogPostPage";
import { LeadMagnetBanner } from "./components/LeadMagnetModal";
import { Footer } from "./components/Footer";
import { Toaster } from "./components/ui/sonner";

export default function App() {
  const [currentPage, setCurrentPage] = useState<string>("");

  useEffect(() => {
    const handleHashChange = () => {
      const hash = window.location.hash.replace("#", "");
      setCurrentPage(hash);
    };

    // Set initial page based on hash
    handleHashChange();

    // Listen for hash changes
    window.addEventListener("hashchange", handleHashChange);
    return () => window.removeEventListener("hashchange", handleHashChange);
  }, []);

  // Scroll to top when page changes
  useEffect(() => {
    window.scrollTo(0, 0);
  }, [currentPage]);

  // Check if it's a blog post page
  const isBlogPost = currentPage.startsWith("blog/");
  
  // Check if it's a resource detail page
  const isResourceDetail = currentPage.startsWith("resource/");
  const resourceId = isResourceDetail ? currentPage.replace("resource/", "") : "";

  return (
    <div className="min-h-screen">
      {currentPage !== "links" && <Navigation />}
      {currentPage === "resources" ? (
        <>
          <ResourcesPage />
          <Footer />
        </>
      ) : currentPage === "about-me" ? (
        <>
          <AboutMePage />
          <Footer />
        </>
      ) : currentPage === "blog" ? (
        <>
          <BlogListPage />
          <Footer />
        </>
      ) : currentPage === "book-detail" ? (
        <>
          <BookDetailPage />
          <Footer />
        </>
      ) : currentPage === "links" ? (
        <LinkHubPage />
      ) : isResourceDetail ? (
        <>
          <ResourceDetailPage resourceId={resourceId} />
          <Footer />
        </>
      ) : isBlogPost ? (
        <>
          <BlogPostPage />
          <Footer />
        </>
      ) : (
        <>
          <main>
            <HeroSection />
            <AboutSection />
            <BlogSection />
            <BookSection />
            <ContactSection />
          </main>
          <Footer />
          <LeadMagnetBanner />
        </>
      )}
      <Toaster />
    </div>
  );
}
