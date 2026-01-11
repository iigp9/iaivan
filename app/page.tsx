import { Button } from "@/components/ui/button"
import { Card } from "@/components/ui/card"
import { Shield, Server, Sparkles, Zap } from "lucide-react"
import { BrainLogo } from "@/components/brain-logo"

export default function Home() {
  return (
    <div className="min-h-screen bg-deep-navy text-white">
      {/* Header/Navigation */}
      <header className="sticky top-0 z-50 border-b border-cyan-accent/20 bg-deep-navy/80 backdrop-blur-md">
        <div className="container mx-auto flex items-center justify-between px-6 py-4">
          <div className="flex items-center gap-2">
            <BrainLogo size={40} className="drop-shadow-glow" />
            <div className="flex flex-col">
              <span className="font-sans text-xl font-semibold text-white">iaivan.com</span>
              <span className="font-mono text-xs text-cyan-accent">Tu IA de Gestión</span>
            </div>
          </div>

          <nav className="hidden items-center gap-8 md:flex">
            <a href="#servicios" className="text-sm text-neutral-light transition-colors hover:text-cyan-accent">
              Servicios
            </a>
            <a href="#tarifas" className="text-sm text-neutral-light transition-colors hover:text-cyan-accent">
              Tarifas
            </a>
            <a href="#blog" className="text-sm text-neutral-light transition-colors hover:text-cyan-accent">
              Blog
            </a>
            <a href="#cavebills" className="text-sm text-neutral-light transition-colors hover:text-cyan-accent">
              Cavebills
            </a>
            <a href="#rewhite" className="text-sm text-neutral-light transition-colors hover:text-cyan-accent">
              Rewhite
            </a>
          </nav>

          <Button className="bg-cyan-accent font-semibold text-deep-navy hover:bg-cyan-accent/90">INSTALAR APP</Button>
        </div>
      </header>

      {/* AI Solution Section - AHORA ARRIBA */}
      <section className="relative px-6 py-20 md:py-28">
        <div
          className="absolute inset-0 bg-[linear-gradient(to_right,transparent_1px,transparent_1px),linear-gradient(to_bottom,transparent_1px,transparent_1px)] bg-[size:40px_40px] opacity-10"
          style={{
            backgroundImage:
              "linear-gradient(to right, rgba(6, 182, 212, 0.1) 1px, transparent 1px), linear-gradient(to bottom, rgba(6, 182, 212, 0.1) 1px, transparent 1px)",
          }}
        />

        <div className="container relative mx-auto max-w-6xl">
          <div className="grid items-center gap-12 md:grid-cols-2">
            <div className="space-y-6">
              <h2 className="font-sans text-4xl font-bold leading-tight text-white text-balance md:text-5xl">
                Solución integral para tu gestión con IA
              </h2>
              <p className="text-lg leading-relaxed text-neutral-light">
                Automatiza procesos, optimizalos y toma decisiones inteligentes.
              </p>
              <Button size="lg" className="bg-cyan-accent font-semibold text-deep-navy hover:bg-cyan-accent/90">
                Comenta Gratis
              </Button>
            </div>

            <div className="relative flex items-center justify-center">
              <div className="relative">
                <div className="absolute inset-0 animate-pulse rounded-full bg-cyan-accent/20 blur-3xl" />
                <BrainLogo size={96} className="animate-heartbeat drop-shadow-glow-lg" />
                <Sparkles className="absolute right-8 top-12 h-8 w-8 animate-pulse text-cyan-accent" />
                <Sparkles className="absolute bottom-16 left-12 h-6 w-6 animate-pulse text-cyan-accent delay-300" />
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Hero Section with Devices - AHORA CON TÍTULO CLARO */}
      <section className="relative overflow-hidden px-6 py-20 md:py-32">
        <div className="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-cyan-accent/10 via-transparent to-transparent" />

        {/* Partículas decorativas */}
        <div className="absolute inset-0 overflow-hidden">
          <div className="absolute left-[20%] top-[20%] h-2 w-2 animate-pulse rounded-full bg-cyan-accent/40 blur-sm" />
          <div className="absolute right-[25%] top-[30%] h-1 w-1 animate-pulse rounded-full bg-cyan-accent/30 blur-sm delay-300" />
          <div className="absolute left-[70%] top-[60%] h-2 w-2 animate-pulse rounded-full bg-cyan-accent/40 blur-sm delay-500" />
          <div className="absolute left-[30%] bottom-[30%] h-1 w-1 animate-pulse rounded-full bg-cyan-accent/30 blur-sm delay-700" />
        </div>

        <div className="container relative mx-auto">
          {/* Título visible y destacado */}
          <div className="mb-12 text-center">
            <h1 className="mb-4 font-sans text-5xl font-bold text-white text-balance drop-shadow-glow md:text-6xl lg:text-7xl">
              Tu IA de Gestión Inteligente
            </h1>
            <p className="mx-auto max-w-2xl text-xl text-cyan-accent text-pretty md:text-2xl">
              Potencia tu negocio con inteligencia artificial en todos tus dispositivos
            </p>
          </div>

          <div className="mx-auto max-w-6xl">
            <div className="perspective-1500 relative mx-auto flex h-[400px] items-center justify-center md:h-[500px]">
              {/* Phone Left - Móvil izquierdo */}
              <div className="relative z-20 rotate-[-8deg] animate-float-delayed">
                <div className="relative">
                  <div className="absolute inset-0 -z-10 rounded-[32px] bg-cyan-accent/10 blur-xl" />

                  <div className="h-[280px] w-[140px] rounded-[32px] border-2 border-neutral-medium/50 bg-gradient-to-br from-neutral-dark to-neutral-medium/30 p-2 shadow-[0_15px_40px_rgba(0,0,0,0.4)]">
                    <div className="absolute left-1/2 top-2 h-4 w-20 -translate-x-1/2 rounded-full bg-deep-navy" />

                    <div className="relative flex h-full w-full items-center justify-center overflow-hidden rounded-[26px] bg-deep-navy">
                      <div className="absolute inset-0 bg-gradient-to-t from-cyan-accent/10 to-transparent" />

                      <div className="absolute inset-0 flex items-center justify-center">
                        <div className="h-24 w-24 animate-ping-slow rounded-full bg-cyan-accent/10" />
                      </div>

                      <BrainLogo size={56} className="relative z-10 animate-pulse drop-shadow-glow" />
                    </div>
                  </div>
                </div>
              </div>

              {/* Laptop - Centro - Más grande */}
              <div className="relative z-10 -mx-2 animate-float">
                <div className="relative">
                  <div className="absolute inset-0 -z-10 rounded-lg bg-cyan-accent/20 blur-2xl" />

                  <div className="relative h-[280px] w-[440px] rounded-lg border border-neutral-medium/40 bg-gradient-to-b from-neutral-dark to-neutral-medium/20 p-3 shadow-[0_20px_60px_rgba(0,0,0,0.5)]">
                    <div className="absolute left-1/2 top-0 h-1.5 w-16 -translate-x-1/2 rounded-b-full bg-neutral-medium/60" />

                    <div className="relative flex h-full w-full items-center justify-center overflow-hidden rounded bg-deep-navy">
                      <div className="absolute inset-0 bg-gradient-to-b from-cyan-accent/5 via-transparent to-cyan-accent/5 animate-scan" />

                      <div className="absolute inset-0 flex items-center justify-center">
                        <div className="h-32 w-32 animate-ping-slow rounded-full bg-cyan-accent/10" />
                        <div className="absolute h-40 w-40 animate-ping-slower rounded-full bg-cyan-accent/5" />
                      </div>

                      <div className="relative z-10">
                        <BrainLogo size={64} className="relative z-10 animate-heartbeat drop-shadow-glow" />

                        <div className="absolute -left-3 top-4">
                          <Sparkles className="h-4 w-4 animate-pulse text-cyan-accent delay-100" />
                        </div>
                        <div className="absolute -right-3 top-8">
                          <Sparkles className="h-3.5 w-3.5 animate-pulse text-cyan-accent delay-300" />
                        </div>
                        <div className="absolute bottom-4 right-4">
                          <Sparkles className="h-4 w-4 animate-pulse text-cyan-accent delay-500" />
                        </div>
                      </div>

                      <div className="absolute bottom-8 flex flex-col items-center">
                        <span className="block text-lg font-bold text-cyan-accent">iaivan</span>
                        <span className="font-mono text-sm text-cyan-accent drop-shadow-glow">Tu IA de Gestión</span>
                      </div>

                      <div className="absolute left-4 top-4 space-y-1.5 opacity-20">
                        <div className="h-1.5 w-8 rounded bg-cyan-accent animate-pulse" />
                        <div className="h-1.5 w-12 rounded bg-cyan-accent animate-pulse delay-100" />
                        <div className="h-1.5 w-7 rounded bg-cyan-accent animate-pulse delay-200" />
                      </div>
                    </div>

                    <div className="absolute -bottom-2.5 left-1/2 h-3 w-[460px] -translate-x-1/2 rounded-b-xl bg-gradient-to-b from-neutral-medium/40 to-neutral-medium/20" />
                  </div>
                </div>
              </div>

              {/* Phone Right - Móvil derecho con menos espacio del laptop */}
              <div className="relative z-20 -ml-36 rotate-[8deg] animate-float-delayed-more">
                <div className="relative">
                  <div className="absolute inset-0 -z-10 rounded-[32px] bg-cyan-accent/10 blur-xl" />

                  <div className="h-[280px] w-[140px] rounded-[32px] border-2 border-neutral-medium/50 bg-gradient-to-br from-neutral-dark to-neutral-medium/30 p-2 shadow-[0_15px_40px_rgba(0,0,0,0.4)]">
                    <div className="absolute left-1/2 top-2 h-4 w-20 -translate-x-1/2 rounded-full bg-deep-navy" />

                    <div className="relative flex h-full w-full flex-col items-start justify-center gap-3 overflow-hidden rounded-[26px] bg-deep-navy p-3">
                      <div className="absolute inset-0 bg-gradient-to-b from-transparent via-cyan-accent/5 to-transparent animate-scan" />

                      <div className="relative z-10 flex items-center gap-2">
                        <BrainLogo size={56} className="relative z-10 animate-pulse drop-shadow-glow" />
                        <div>
                          <div className="font-sans text-sm font-bold text-white">iaivan</div>
                          <div className="font-mono text-[9px] text-cyan-accent">Dashboard</div>
                        </div>
                      </div>

                      <div className="relative z-10 w-full space-y-2">
                        <div className="group flex items-center gap-2 rounded-lg border border-cyan-accent/20 bg-cyan-accent/5 p-2 transition-all hover:bg-cyan-accent/10">
                          <div className="h-2 w-full animate-pulse rounded-full bg-cyan-accent/60" />
                        </div>
                        <div className="group flex items-center gap-2 rounded-lg border border-cyan-accent/20 bg-cyan-accent/5 p-2 transition-all hover:bg-cyan-accent/10">
                          <div className="h-2 w-3/4 animate-pulse rounded-full bg-cyan-accent/40 delay-100" />
                        </div>
                        <div className="group flex items-center gap-2 rounded-lg border border-cyan-accent/20 bg-cyan-accent/5 p-2 transition-all hover:bg-cyan-accent/10">
                          <div className="h-2 w-5/6 animate-pulse rounded-full bg-cyan-accent/60 delay-200" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Services Section - AHORA CON 3 PLANES */}
      <section id="servicios" className="px-6 py-20">
        <div className="container mx-auto max-w-7xl">
          <h2 className="mb-4 text-center font-sans text-4xl font-bold text-white">Nuestros Servicios</h2>
          <p className="mb-12 text-center text-lg text-neutral-light">Elige el plan perfecto para tu negocio</p>

          <div className="grid gap-6 md:grid-cols-3">
            {/* Plan Gratis */}
            <Card className="group relative overflow-hidden border-cyan-accent/50 bg-gradient-to-br from-cyan-accent/10 to-deep-navy/50 p-8 shadow-[0_0_30px_rgba(6,182,212,0.3)] backdrop-blur-sm transition-all hover:shadow-[0_0_50px_rgba(6,182,212,0.5)]">
              <div className="mb-6 flex h-16 w-16 items-center justify-center rounded-xl bg-cyan-accent/20">
                <Zap className="h-8 w-8 text-cyan-accent" />
              </div>

              <h3 className="mb-2 border-b-2 border-cyan-accent pb-2 font-sans text-2xl font-bold text-white">
                Plan Gratis
              </h3>
              <p className="mb-2 text-sm text-cyan-accent font-semibold">€0/mes</p>
              <p className="mb-6 text-neutral-light">Prueba nuestras funciones básicas sin compromiso</p>

              <ul className="mb-8 space-y-3 text-sm text-neutral-light">
                <li className="flex items-start gap-2">
                  <span className="text-cyan-accent">✓</span>
                  <span>Acceso limitado a IA</span>
                </li>
                <li className="flex items-start gap-2">
                  <span className="text-cyan-accent">✓</span>
                  <span>5 consultas al día</span>
                </li>
                <li className="flex items-start gap-2">
                  <span className="text-cyan-accent">✓</span>
                  <span>Soporte por email</span>
                </li>
                <li className="flex items-start gap-2">
                  <span className="text-cyan-accent">✓</span>
                  <span>Interfaz básica</span>
                </li>
              </ul>

              <Button
                variant="outline"
                className="w-full border-cyan-accent text-cyan-accent hover:bg-cyan-accent hover:text-deep-navy bg-transparent"
              >
                Empezar Gratis
              </Button>
            </Card>

            {/* Plan Profesional */}
            <Card className="group relative overflow-hidden border-cyan-accent/50 bg-gradient-to-br from-cyan-accent/10 to-deep-navy/50 p-8 shadow-[0_0_30px_rgba(6,182,212,0.3)] backdrop-blur-sm transition-all hover:shadow-[0_0_50px_rgba(6,182,212,0.5)]">
              <div className="mb-6 flex h-16 w-16 items-center justify-center rounded-xl bg-cyan-accent/20">
                <Shield className="h-8 w-8 text-cyan-accent" />
              </div>

              <h3 className="mb-2 border-b-2 border-cyan-accent pb-2 font-sans text-2xl font-bold text-white">
                Plan Profesional
              </h3>
              <p className="mb-2 text-sm text-cyan-accent font-semibold">€29/mes</p>
              <p className="mb-6 text-neutral-light">Perfecto para pequeñas empresas y autónomos</p>

              <ul className="mb-8 space-y-3 text-sm text-neutral-light">
                <li className="flex items-start gap-2">
                  <span className="text-cyan-accent">✓</span>
                  <span>Consultas ilimitadas</span>
                </li>
                <li className="flex items-start gap-2">
                  <span className="text-cyan-accent">✓</span>
                  <span>Borrado de archivos originales</span>
                </li>
                <li className="flex items-start gap-2">
                  <span className="text-cyan-accent">✓</span>
                  <span>Soporte prioritario</span>
                </li>
                <li className="flex items-start gap-2">
                  <span className="text-cyan-accent">✓</span>
                  <span>Integraciones básicas</span>
                </li>
              </ul>

              <Button
                variant="outline"
                className="w-full border-cyan-accent text-cyan-accent hover:bg-cyan-accent hover:text-deep-navy bg-transparent"
              >
                Más información
              </Button>
            </Card>

            {/* Plan Enterprise */}
            <Card className="group relative overflow-hidden border-cyan-accent/50 bg-gradient-to-br from-cyan-accent/10 to-deep-navy/50 p-8 shadow-[0_0_30px_rgba(6,182,212,0.3)] backdrop-blur-sm transition-all hover:shadow-[0_0_50px_rgba(6,182,212,0.5)]">
              <div className="absolute right-4 top-4 rounded-full bg-cyan-accent px-3 py-1 font-mono text-xs font-bold text-deep-navy">
                MÁS POPULAR
              </div>

              <div className="mb-6 flex h-16 w-16 items-center justify-center rounded-xl bg-cyan-accent/20">
                <Server className="h-8 w-8 text-cyan-accent" />
              </div>

              <h3 className="mb-2 border-b-2 border-cyan-accent pb-2 font-sans text-2xl font-bold text-white">
                Plan Enterprise
              </h3>
              <p className="mb-2 text-sm text-cyan-accent font-semibold">€99/mes</p>
              <p className="mb-6 text-neutral-light">Para empresas que necesitan máximo rendimiento</p>

              <ul className="mb-8 space-y-3 text-sm text-neutral-light">
                <li className="flex items-start gap-2">
                  <span className="text-cyan-accent">✓</span>
                  <span>Todo del Plan Profesional</span>
                </li>
                <li className="flex items-start gap-2">
                  <span className="text-cyan-accent">✓</span>
                  <span>Borración permanente segura</span>
                </li>
                <li className="flex items-start gap-2">
                  <span className="text-cyan-accent">✓</span>
                  <span>API completa</span>
                </li>
                <li className="flex items-start gap-2">
                  <span className="text-cyan-accent">✓</span>
                  <span>Soporte 24/7</span>
                </li>
                <li className="flex items-start gap-2">
                  <span className="text-cyan-accent">✓</span>
                  <span>Análisis avanzado</span>
                </li>
              </ul>

              <Button
                variant="outline"
                className="w-full border-cyan-accent text-cyan-accent hover:bg-cyan-accent hover:text-deep-navy bg-transparent"
              >
                Más información
              </Button>
            </Card>
          </div>
        </div>
      </section>

      {/* Footer */}
      <footer className="border-t border-neutral-medium/30 bg-deep-navy/80 px-6 py-12">
        <div className="container mx-auto">
          <div className="mb-8 flex flex-col items-center justify-between gap-6 md:flex-row">
            <div className="flex items-center gap-2">
              <BrainLogo size={32} className="drop-shadow-glow" />
              <span className="font-sans text-lg font-semibold text-white">iaivan.com</span>
            </div>

            <nav className="flex flex-wrap items-center justify-center gap-8">
              <a
                href="#informacion-legal"
                className="text-sm text-neutral-light transition-colors hover:text-cyan-accent"
              >
                Información Legal
              </a>
              <a
                href="#proteccion-datos"
                className="text-sm text-neutral-light transition-colors hover:text-cyan-accent"
              >
                Protección de Datos
              </a>
              <a href="#rgpd" className="text-sm text-neutral-light transition-colors hover:text-cyan-accent">
                RGPD
              </a>
              <a href="#terminos" className="text-sm text-neutral-light transition-colors hover:text-cyan-accent">
                Términos y Condiciones
              </a>
            </nav>
          </div>

          <div className="border-t border-neutral-medium/20 pt-6 text-center">
            <p className="font-mono text-xs text-neutral-light">
              © 2025 Dropbots - Hitpeer Alemania | Todos los derechos reservados
            </p>
          </div>
        </div>
      </footer>
    </div>
  )
}
