export const fadeInUp = {
  hidden: { opacity: 0, y: 60 },
  visible: {
    opacity: 1,
    y: 0,
    transition: { duration: 1, ease: [0.22, 1, 0.36, 1] as any }
  },
};

export const stagger = {
  visible: { transition: { staggerChildren: 0.2 } },
};
