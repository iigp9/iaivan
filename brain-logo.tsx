import React from 'react';

export function BrainLogo({ className = "", size = 40 }: { className?: string, size?: number }) {
  return (
    <svg
      width={size}
      height={size}
      viewBox="0 0 200 200"
      className={className}
      xmlns="http://www.w3.org/2000/svg"
    >
      <defs>
        <radialGradient id="brainGradient" cx="50%" cy="50%" r="50%" fx="50%" fy="50%">
          <stop offset="0%" stopColor="#60A5FA" stopOpacity="0.8" />
          <stop offset="100%" stopColor="#3B82F6" stopOpacity="0" />
        </radialGradient>
      </defs>
      {/* Resplandor de fondo */}
      <circle cx="100" cy="100" r="80" fill="url(#brainGradient)" />
      {/* Silueta del cerebro */}
      <path
        d="M100 40C70 40 45 60 45 90C45 105 55 120 65 130C65 145 55 155 45 160C60 160 80 150 90 140C93 140 97 140 100 140C130 140 155 120 155 90C155 60 130 40 100 40Z"
        fill="white"
      />
      {/* Surcos cerebrales */}
      <path
        d="M100 60C115 60 125 75 125 90M100 80C110 80 115 85 115 90M75 90C75 75 85 60 100 60"
        stroke="#3B82F6"
        strokeWidth="4"
        strokeLinecap="round"
        fill="none"
      />
    </svg>
  );
}

export default BrainLogo;