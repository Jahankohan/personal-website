import { motion } from "motion/react";
import { MessageCircle, Repeat2, Heart, Share, ThumbsUp, Send } from "lucide-react";

interface TweetEmbedProps {
  author: {
    name: string;
    handle: string;
    avatar: string;
    verified?: boolean;
  };
  content: string;
  timestamp: string;
  likes?: number;
  retweets?: number;
  replies?: number;
}

export function TweetEmbed({ 
  author, 
  content, 
  timestamp, 
  likes = 0, 
  retweets = 0, 
  replies = 0 
}: TweetEmbedProps) {
  return (
    <motion.div
      initial={{ opacity: 0, y: 20 }}
      whileInView={{ opacity: 1, y: 0 }}
      viewport={{ once: true }}
      className="border rounded-xl p-4 bg-white my-6 max-w-xl mx-auto"
      style={{ borderColor: "#E1E8ED" }}
    >
      {/* Header */}
      <div className="flex items-start gap-3 mb-3">
        <img 
          src={author.avatar} 
          alt={author.name}
          className="w-12 h-12 rounded-full object-cover"
        />
        <div className="flex-1 min-w-0">
          <div className="flex items-center gap-1">
            <span className="font-bold text-gray-900 truncate">{author.name}</span>
            {author.verified && (
              <svg className="w-5 h-5 text-blue-500" viewBox="0 0 24 24" fill="currentColor">
                <path d="M22.5 12.5c0-1.58-.875-2.95-2.148-3.6.154-.435.238-.905.238-1.4 0-2.21-1.71-3.998-3.818-3.998-.47 0-.92.084-1.336.25C14.818 2.415 13.51 1.5 12 1.5s-2.816.917-3.437 2.25c-.415-.165-.866-.25-1.336-.25-2.11 0-3.818 1.79-3.818 4 0 .494.083.964.237 1.4-1.272.65-2.147 2.018-2.147 3.6 0 1.495.782 2.798 1.942 3.486-.02.17-.032.34-.032.514 0 2.21 1.708 4 3.818 4 .47 0 .92-.086 1.335-.25.62 1.334 1.926 2.25 3.437 2.25 1.512 0 2.818-.916 3.437-2.25.415.163.865.248 1.336.248 2.11 0 3.818-1.79 3.818-4 0-.174-.012-.344-.033-.513 1.158-.687 1.943-1.99 1.943-3.484zm-6.616-3.334l-4.334 6.5c-.145.217-.382.334-.625.334-.143 0-.288-.04-.416-.126l-.115-.094-2.415-2.415c-.293-.293-.293-.768 0-1.06s.768-.294 1.06 0l1.77 1.767 3.825-5.74c.23-.345.696-.436 1.04-.207.346.23.44.696.21 1.04z"/>
              </svg>
            )}
          </div>
          <span className="text-gray-500 text-sm">@{author.handle}</span>
        </div>
        <div className="text-gray-500">
          <svg className="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
          </svg>
        </div>
      </div>

      {/* Content */}
      <div className="text-gray-900 mb-3 whitespace-pre-wrap">{content}</div>

      {/* Timestamp */}
      <div className="text-gray-500 text-sm mb-3">{timestamp}</div>

      {/* Divider */}
      <div className="border-t my-3" style={{ borderColor: "#E1E8ED" }} />

      {/* Stats */}
      <div className="flex items-center gap-6 text-gray-500 text-sm">
        <button className="flex items-center gap-2 hover:text-blue-500 transition-colors">
          <MessageCircle size={18} />
          <span>{replies}</span>
        </button>
        <button className="flex items-center gap-2 hover:text-green-500 transition-colors">
          <Repeat2 size={18} />
          <span>{retweets}</span>
        </button>
        <button className="flex items-center gap-2 hover:text-red-500 transition-colors">
          <Heart size={18} />
          <span>{likes}</span>
        </button>
        <button className="flex items-center gap-2 hover:text-blue-500 transition-colors">
          <Share size={18} />
        </button>
      </div>
    </motion.div>
  );
}

interface LinkedInPostEmbedProps {
  author: {
    name: string;
    title: string;
    avatar: string;
  };
  content: string;
  timestamp: string;
  likes?: number;
  comments?: number;
  reposts?: number;
}

export function LinkedInPostEmbed({ 
  author, 
  content, 
  timestamp,
  likes = 0,
  comments = 0,
  reposts = 0
}: LinkedInPostEmbedProps) {
  return (
    <motion.div
      initial={{ opacity: 0, y: 20 }}
      whileInView={{ opacity: 1, y: 0 }}
      viewport={{ once: true }}
      className="border rounded-xl bg-white my-6 max-w-xl mx-auto overflow-hidden"
      style={{ borderColor: "#D0D5DD" }}
    >
      {/* Header */}
      <div className="p-4">
        <div className="flex items-start gap-3 mb-3">
          <img 
            src={author.avatar} 
            alt={author.name}
            className="w-12 h-12 rounded-full object-cover"
          />
          <div className="flex-1 min-w-0">
            <div className="font-semibold text-gray-900">{author.name}</div>
            <div className="text-sm text-gray-600">{author.title}</div>
            <div className="text-xs text-gray-500 flex items-center gap-1">
              {timestamp}
              <span>•</span>
              <svg className="w-3 h-3" viewBox="0 0 16 16" fill="currentColor">
                <path d="M8 1a7 7 0 100 14A7 7 0 008 1zM3 8a5 5 0 1110 0A5 5 0 013 8z"/>
                <path d="M8 4a.5.5 0 01.5.5v3.793l2.146 2.147a.5.5 0 01-.707.707l-2.5-2.5A.5.5 0 017 8V4.5A.5.5 0 018 4z"/>
              </svg>
            </div>
          </div>
          <button className="text-gray-500 hover:bg-gray-100 p-2 rounded-full">
            <svg className="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
              <path d="M14 12a2 2 0 11-4 0 2 2 0 014 0zM14 5a2 2 0 11-4 0 2 2 0 014 0zM14 19a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
          </button>
        </div>

        {/* Content */}
        <div className="text-gray-900 whitespace-pre-wrap">{content}</div>
      </div>

      {/* Divider */}
      <div className="border-t" style={{ borderColor: "#D0D5DD" }} />

      {/* Stats */}
      <div className="px-4 py-2 flex items-center justify-between text-sm text-gray-600">
        <div className="flex items-center gap-1">
          <div className="flex -space-x-1">
            <div className="w-5 h-5 rounded-full bg-blue-500 border-2 border-white flex items-center justify-center">
              <ThumbsUp size={10} className="text-white" />
            </div>
          </div>
          <span>{likes}</span>
        </div>
        <div className="flex items-center gap-3">
          <span>{comments} comments</span>
          <span>•</span>
          <span>{reposts} reposts</span>
        </div>
      </div>

      {/* Divider */}
      <div className="border-t" style={{ borderColor: "#D0D5DD" }} />

      {/* Actions */}
      <div className="flex items-center justify-around p-2">
        <button className="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 rounded transition-colors text-gray-700">
          <ThumbsUp size={20} />
          <span>Like</span>
        </button>
        <button className="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 rounded transition-colors text-gray-700">
          <MessageCircle size={20} />
          <span>Comment</span>
        </button>
        <button className="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 rounded transition-colors text-gray-700">
          <Repeat2 size={20} />
          <span>Repost</span>
        </button>
        <button className="flex items-center gap-2 px-4 py-2 hover:bg-gray-100 rounded transition-colors text-gray-700">
          <Send size={20} />
          <span>Send</span>
        </button>
      </div>
    </motion.div>
  );
}
