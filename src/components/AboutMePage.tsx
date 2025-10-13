import { motion, useInView } from "motion/react";
import { useRef } from "react";
import { Button } from "./ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "./ui/card";
import { Badge } from "./ui/badge";
import { ImageWithFallback } from "./figma/ImageWithFallback";
import {
  Brain,
  Users,
  Lightbulb,
  Globe,
  Briefcase,
  Award,
  Target,
  Rocket,
  MessageSquare,
  Code,
  Sparkles,
  BookOpen,
  Calendar
} from "lucide-react";

export function AboutMePage() {
  const heroRef = useRef(null);
  const experienceRef = useRef(null);
  const servicesRef = useRef(null);
  const ctaRef = useRef(null);

  const isHeroInView = useInView(heroRef, { once: true, amount: 0.2 });
  const isExperienceInView = useInView(experienceRef, { once: true, amount: 0.2 });
  const isServicesInView = useInView(servicesRef, { once: true, amount: 0.2 });
  const isCtaInView = useInView(ctaRef, { once: true, amount: 0.3 });

  const experiences = [
    {
      period: "2020 - Present",
      role: "Technology Strategy Consultant",
      organization: "Independent Practice",
      description: "Advising Fortune 500 companies and innovative startups on AI implementation, blockchain adoption, and digital transformation strategies. Led 50+ successful technology integration projects.",
      achievements: [
        "Guided 30+ enterprises through AI transformation",
        "Designed blockchain solutions for 15+ organizations",
        "Delivered 100+ keynote presentations worldwide"
      ],
      color: "var(--electric-cyan)"
    },
    {
      period: "2017 - 2020",
      role: "Director of Innovation",
      organization: "TechVentures Global",
      description: "Led a team of 20+ engineers and strategists to develop cutting-edge AI and blockchain solutions. Spearheaded the company's innovation lab and emerging technology initiatives.",
      achievements: [
        "Launched 5 successful AI products",
        "Built innovation team from 5 to 25 members",
        "Generated $10M in new revenue streams"
      ],
      color: "var(--neural-purple)"
    },
    {
      period: "2014 - 2017",
      role: "Senior AI/Blockchain Engineer",
      organization: "Digital Frontier Labs",
      description: "Architected and implemented machine learning systems and distributed ledger solutions for enterprise clients across finance, healthcare, and supply chain sectors.",
      achievements: [
        "Developed ML models with 95%+ accuracy",
        "Implemented blockchain solutions for 20+ clients",
        "Published 12 technical papers"
      ],
      color: "var(--warm-ember)"
    },
    {
      period: "2012 - 2014",
      role: "Software Engineer",
      organization: "NextGen Technologies",
      description: "Built scalable web applications and data pipelines. Explored early cryptocurrency and blockchain technologies, laying the foundation for future specialization.",
      achievements: [
        "Built 15+ production applications",
        "Optimized systems for 10x performance",
        "Earned 3 technical certifications"
      ],
      color: "var(--sunset-orange)"
    }
  ];

  const services = [
    {
      icon: Rocket,
      title: "Digital Transformation Strategy",
      description: "Comprehensive roadmaps for integrating AI, blockchain, and emerging technologies into your business operations.",
      features: [
        "Technology readiness assessment",
        "Custom implementation roadmaps",
        "Change management planning",
        "ROI measurement frameworks"
      ],
      color: "var(--electric-cyan)"
    },
    {
      icon: Brain,
      title: "AI & Machine Learning Consulting",
      description: "From proof-of-concept to production, I help organizations leverage artificial intelligence to solve real business challenges.",
      features: [
        "Use case identification",
        "Model architecture design",
        "Team training & upskilling",
        "Ethical AI frameworks"
      ],
      color: "var(--neural-purple)"
    },
    {
      icon: Globe,
      title: "Blockchain Implementation",
      description: "Practical guidance on leveraging blockchain and decentralized technologies for transparency, security, and efficiency.",
      features: [
        "Technology selection guidance",
        "Smart contract development",
        "Security audits & compliance",
        "Ecosystem design"
      ],
      color: "var(--warm-ember)"
    },
    {
      icon: MessageSquare,
      title: "Thought Leadership & Speaking",
      description: "Engaging keynotes, workshops, and content creation to help your organization and industry understand emerging technologies.",
      features: [
        "Conference keynotes",
        "Executive workshops",
        "Team training sessions",
        "Content & white papers"
      ],
      color: "var(--sunset-orange)"
    }
  ];

  const stats = [
    { label: "Years of Experience", value: "12+" },
    { label: "Projects Delivered", value: "150+" },
    { label: "Speaking Engagements", value: "100+" },
    { label: "Client Satisfaction", value: "98%" }
  ];

  return (
    <div className="min-h-screen bg-gray-50">
      {/* Hero Section */}
      <section
        ref={heroRef}
        className="relative py-24 overflow-hidden"
        style={{
          background: "linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple))"
        }}
      >
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid lg:grid-cols-2 gap-12 items-center">
            <motion.div
              initial={{ opacity: 0, y: 30 }}
              animate={isHeroInView ? { opacity: 1, y: 0 } : {}}
              transition={{ duration: 0.8 }}
            >
              <Badge className="mb-4 text-white" style={{ backgroundColor: "var(--warm-ember)" }}>
                Technology Strategist & AI Advocate
              </Badge>
              <h1 className="text-white mb-6 text-4xl sm:text-5xl lg:text-6xl tracking-tight">
                Building Bridges Between Technology and Humanity
              </h1>
              <p className="text-white/90 text-xl mb-8">
                I'm a technology strategist, blockchain enthusiast, and AI advocate dedicated to ensuring 
                that emerging technologies serve humanity, not the other way around.
              </p>
              <div className="flex flex-wrap gap-4">
                <Button
                  size="lg"
                  className="text-white"
                  style={{ backgroundColor: "var(--sunset-orange)" }}
                  onClick={() => {
                    document.getElementById("cta-section")?.scrollIntoView({ behavior: "smooth" });
                  }}
                >
                  <Calendar className="mr-2" size={20} />
                  Schedule a Call
                </Button>
                <Button
                  size="lg"
                  variant="outline"
                  className="text-white border-white/30 hover:bg-white/10"
                  onClick={() => {
                    document.getElementById("experience-section")?.scrollIntoView({ behavior: "smooth" });
                  }}
                >
                  View Experience
                </Button>
              </div>
            </motion.div>

            <motion.div
              initial={{ opacity: 0, scale: 0.9 }}
              animate={isHeroInView ? { opacity: 1, scale: 1 } : {}}
              transition={{ duration: 0.8, delay: 0.2 }}
              className="relative"
            >
              <div className="relative rounded-2xl overflow-hidden shadow-2xl">
                <ImageWithFallback
                  src="https://images.unsplash.com/photo-1758600587728-9bde755354ad?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjb25maWRlbnQlMjBwcm9mZXNzaW9uYWwlMjBwb3J0cmFpdHxlbnwxfHx8fDE3NTk0MDA4MDB8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                  alt="Professional portrait"
                  className="w-full h-auto"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent" />
              </div>

              {/* Floating Stats */}
              <div className="absolute -bottom-6 left-6 right-6 grid grid-cols-2 gap-3">
                {stats.slice(0, 2).map((stat, index) => (
                  <motion.div
                    key={stat.label}
                    initial={{ opacity: 0, y: 20 }}
                    animate={isHeroInView ? { opacity: 1, y: 0 } : {}}
                    transition={{ duration: 0.6, delay: 0.4 + index * 0.1 }}
                    className="bg-white p-4 rounded-lg shadow-xl"
                  >
                    <div className="text-2xl mb-1" style={{ color: "var(--deep-tech-blue)" }}>
                      {stat.value}
                    </div>
                    <div className="text-sm text-gray-600">{stat.label}</div>
                  </motion.div>
                ))}
              </div>
            </motion.div>
          </div>

          {/* Stats Bar */}
          <motion.div
            initial={{ opacity: 0, y: 30 }}
            animate={isHeroInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.8, delay: 0.6 }}
            className="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6"
          >
            {stats.map((stat, index) => (
              <div
                key={stat.label}
                className="text-center p-6 bg-white/10 backdrop-blur-sm rounded-lg"
              >
                <div className="text-3xl mb-2 text-white">{stat.value}</div>
                <div className="text-white/80">{stat.label}</div>
              </div>
            ))}
          </motion.div>
        </div>
      </section>

      {/* Experience Section */}
      <section
        id="experience-section"
        ref={experienceRef}
        className="py-24 bg-white"
      >
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <motion.div
            initial={{ opacity: 0, y: 30 }}
            animate={isExperienceInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.6 }}
            className="text-center mb-16"
          >
            <h2
              className="mb-4 text-4xl sm:text-5xl tracking-tight"
              style={{ color: "var(--deep-tech-blue)" }}
            >
              Professional Journey
            </h2>
            <div
              className="w-24 h-1 mx-auto mb-6"
              style={{ backgroundColor: "var(--warm-ember)" }}
            />
            <p className="text-xl max-w-3xl mx-auto text-gray-700">
              Over a decade of hands-on experience in emerging technologies, from engineering to strategy
            </p>
          </motion.div>

          <div className="space-y-8">
            {experiences.map((exp, index) => (
              <motion.div
                key={exp.role}
                initial={{ opacity: 0, x: index % 2 === 0 ? -50 : 50 }}
                animate={isExperienceInView ? { opacity: 1, x: 0 } : {}}
                transition={{ duration: 0.6, delay: 0.1 * index }}
              >
                <Card className="overflow-hidden hover:shadow-xl transition-shadow">
                  <div
                    className="h-2"
                    style={{ backgroundColor: exp.color }}
                  />
                  <CardHeader>
                    <div className="flex flex-wrap items-start justify-between gap-4 mb-2">
                      <div className="flex-1">
                        <CardTitle style={{ color: "var(--deep-tech-blue)" }}>
                          {exp.role}
                        </CardTitle>
                        <CardDescription className="text-lg mt-1">
                          {exp.organization}
                        </CardDescription>
                      </div>
                      <Badge
                        variant="outline"
                        className="text-gray-600"
                        style={{ borderColor: exp.color }}
                      >
                        <Briefcase size={14} className="mr-1" />
                        {exp.period}
                      </Badge>
                    </div>
                  </CardHeader>
                  <CardContent>
                    <p className="text-gray-700 mb-4">{exp.description}</p>
                    <div className="space-y-2">
                      <h4 className="text-sm" style={{ color: "var(--deep-tech-blue)" }}>
                        Key Achievements:
                      </h4>
                      <ul className="space-y-1">
                        {exp.achievements.map((achievement, i) => (
                          <li key={i} className="flex items-start gap-2 text-gray-600">
                            <Award size={16} className="mt-0.5 flex-shrink-0" style={{ color: exp.color }} />
                            <span>{achievement}</span>
                          </li>
                        ))}
                      </ul>
                    </div>
                  </CardContent>
                </Card>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* What I Do Section */}
      <section
        ref={servicesRef}
        className="py-24 bg-gray-50"
      >
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <motion.div
            initial={{ opacity: 0, y: 30 }}
            animate={isServicesInView ? { opacity: 1, y: 0 } : {}}
            transition={{ duration: 0.6 }}
            className="text-center mb-16"
          >
            <h2
              className="mb-4 text-4xl sm:text-5xl tracking-tight"
              style={{ color: "var(--deep-tech-blue)" }}
            >
              What I Do
            </h2>
            <div
              className="w-24 h-1 mx-auto mb-6"
              style={{ backgroundColor: "var(--warm-ember)" }}
            />
            <p className="text-xl max-w-3xl mx-auto text-gray-700">
              Comprehensive services to help your organization navigate the future of technology
            </p>
          </motion.div>

          <div className="grid md:grid-cols-2 gap-8">
            {services.map((service, index) => {
              const Icon = service.icon;
              return (
                <motion.div
                  key={service.title}
                  initial={{ opacity: 0, y: 30 }}
                  animate={isServicesInView ? { opacity: 1, y: 0 } : {}}
                  transition={{ duration: 0.6, delay: 0.1 * index }}
                >
                  <Card className="h-full hover:shadow-xl transition-all hover:-translate-y-1">
                    <CardHeader>
                      <div
                        className="w-14 h-14 rounded-xl flex items-center justify-center mb-4"
                        style={{ backgroundColor: service.color, opacity: 0.1 }}
                      >
                        <Icon size={28} style={{ color: service.color }} />
                      </div>
                      <CardTitle style={{ color: "var(--deep-tech-blue)" }}>
                        {service.title}
                      </CardTitle>
                      <CardDescription className="text-base">
                        {service.description}
                      </CardDescription>
                    </CardHeader>
                    <CardContent>
                      <ul className="space-y-2">
                        {service.features.map((feature, i) => (
                          <li key={i} className="flex items-start gap-2 text-gray-600">
                            <Target size={16} className="mt-0.5 flex-shrink-0" style={{ color: service.color }} />
                            <span>{feature}</span>
                          </li>
                        ))}
                      </ul>
                    </CardContent>
                  </Card>
                </motion.div>
              );
            })}
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section
        id="cta-section"
        ref={ctaRef}
        className="py-24 relative overflow-hidden"
        style={{
          background: "linear-gradient(135deg, var(--neural-purple), var(--deep-tech-blue))"
        }}
      >
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
          <motion.div
            initial={{ opacity: 0, scale: 0.95 }}
            animate={isCtaInView ? { opacity: 1, scale: 1 } : {}}
            transition={{ duration: 0.8 }}
            className="text-center"
          >
            <Sparkles className="mx-auto mb-6 text-white" size={48} />
            <h2 className="text-white mb-6 text-4xl sm:text-5xl tracking-tight">
              Let's Build the Future Together
            </h2>
            <p className="text-white/90 text-xl mb-8 max-w-2xl mx-auto">
              Whether you're looking to implement AI, explore blockchain, or navigate digital transformation, 
              I'm here to help. Let's have a conversation about your goals.
            </p>

            <div className="flex flex-col sm:flex-row gap-4 justify-center mb-8">
              <Button
                size="lg"
                className="text-white"
                style={{ backgroundColor: "var(--sunset-orange)" }}
                onClick={() => window.location.hash = "consultancy"}
              >
                <Calendar className="mr-2" size={20} />
                Schedule a Consultation
              </Button>
              <Button
                size="lg"
                variant="outline"
                className="text-white border-white/30 hover:bg-white/10"
                onClick={() => window.location.hash = "resources"}
              >
                <BookOpen className="mr-2" size={20} />
                Download Free Resources
              </Button>
            </div>

            <div className="flex flex-wrap justify-center gap-6 text-white/80">
              <div className="flex items-center gap-2">
                <Users size={20} />
                <span>150+ Projects</span>
              </div>
              <div className="flex items-center gap-2">
                <Award size={20} />
                <span>98% Satisfaction</span>
              </div>
              <div className="flex items-center gap-2">
                <Code size={20} />
                <span>12+ Years</span>
              </div>
            </div>
          </motion.div>
        </div>

        {/* Decorative Elements */}
        <div className="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-3xl" />
        <div className="absolute bottom-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl" />
      </section>
    </div>
  );
}
