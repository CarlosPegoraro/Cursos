using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.Fundamentos
{
    internal class OperadoresAritimeticos
    {
        public static void Executar()
        {
            //preco desconto
            double preco = 1000;
            double imposto = 355;
            double desconto = 0.1;

            double total = preco + imposto;
            double totalComDesconto = total - (total * desconto);
            Console.WriteLine("O preco final é: {0}", totalComDesconto.ToString("C"));

            //IMC
            Console.Write("Qual o seu peso? ");
            double peso = double.Parse(Console.ReadLine());
            Console.Write("Qual é a sua altura? ");
            double altura = double.Parse(Console.ReadLine());

            double imc = peso / Math.Pow(altura, 2);
            Console.WriteLine("O seu IMC é: {0}", imc);

            // Número Par/Impar
            int par = 24;
            int impar = 55;
            Console.WriteLine("{0}/2 tem resto {1}", par, par % 2);
            Console.WriteLine("{0}/2 tem resto {1}", impar, impar % 2);
        }
    }
}
