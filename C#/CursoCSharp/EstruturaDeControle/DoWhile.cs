using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.EstruturaDeControle
{
    internal class DoWhile
    {
        public static void Executar()
        {
            string entrada;

            do
            {
                Console.WriteLine("Qual o seu nome? ");
                entrada = Console.ReadLine();

                Console.WriteLine("Seja bem-vindo {0}", entrada);
                Console.WriteLine("Deseja continuar? (s/n)");
                entrada = Console.ReadLine().ToLower();
            } while (entrada == "s");
        }
    }
}
