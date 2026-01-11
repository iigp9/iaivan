export function BrainLogo({ className = "", size = 40 }: { className?: string; size?: number }) {
  return (
    <img
      src="/images/6845b7bf-807f-4f6b-9d46-8c0101359680.png"
      alt="iaivan Brain Logo"
      width={size}
      height={size}
      className={className}
      style={{
        filter: "drop-shadow(0 0 10px rgba(6, 182, 212, 0.6))",
        objectFit: "contain",
      }}
    />
  )
}
