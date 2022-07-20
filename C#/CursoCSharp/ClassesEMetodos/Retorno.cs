using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.ClassesEMetodos
{
    class CalculadoraComun
    {
        public double Somar( double a, double b )
        {
            var resultado = a + b;
            Console.WriteLine($"O valor da soma entre {a} e {b} é {resultado}");
            return resultado;
        }

        public double Subtrair(double a, double b)
        {
            var resultado = a - b;
            Console.WriteLine($"O valor da subtração entre {a} e {b} é {resultado}");
            return resultado;
        }

        public double Multiplicar( double a, double b )
        {
            var resultado = a * b;
            Console.WriteLine($"O valor da multiplicação entre {a} e {b} é {resultado}");
            return resultado;
        }

        public double Dividir(double a, double b)
        {
            var resultado = a / b;
            Console.WriteLine($"O valor da divisão entre {a} e {b} é {resultado}");
            return resultado;
        }
    }

    class CalculadoraCadeia
    {
        double Memoria;

        public CalculadoraCadeia Somar( double a )
        {
            this.Memoria += a;
            return this;
        }

        public CalculadoraCadeia Subtrair(double a)
        {
            this.Memoria -= a;
            return this;
        }

        public CalculadoraCadeia Multiplicar( double a )
        {
            this.Memoria *= a;
            return this;
        }

        public CalculadoraCadeia Dividir( double a )
        {
            this.Memoria /= a;
            return this;
        }

        public CalculadoraCadeia Limpar()
        {
            this.Memoria = 0;
            return this;
        }

        public CalculadoraCadeia Imprimir()
        {
            Console.WriteLine($"O valor salvo na memória é: {this.Memoria}");
            return this;
        }

        public double Resultado()
        {
            return this.Memoria;
        }
    }
    internal class Retorno
    {
        public static void Executar()
        {
            var CalculadoraComun = new CalculadoraComun();
            CalculadoraComun.Somar(5, 5);
            CalculadoraComun.Subtrair(5, 5);
            CalculadoraComun.Multiplicar(5, 5);
            CalculadoraComun.Dividir(5, 5);

            var CalculadoraCadeia = new CalculadoraCadeia();
            CalculadoraCadeia.Somar(3).Multiplicar(3).Imprimir();
            CalculadoraCadeia.Subtrair(6).Dividir(2).Imprimir();
        }
    }
}
