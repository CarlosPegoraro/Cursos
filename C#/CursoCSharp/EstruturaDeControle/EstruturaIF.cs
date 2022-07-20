using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.EstruturaDeControle
{
    internal class EstruturaIF
    {
        public static void Executar()
        {
            //if (expresao, nao pode usar contas, tem que ser uma expresao verdadeira ou falsa)
            //{
            //    sentencia de codigo, usado se o valor da exprecao for verdadeiro, usa ; para finalizar a sentencia
            //}

            string entrada;

            Console.WriteLine("Digite a nota do aluno: ");
            entrada = Console.ReadLine();
            Double.TryParse(entrada, out double nota);

            if (nota >= 9.0)
            {
                Console.WriteLine("Quadro de honra!");
            }
            else if (nota >= 7 && nota < 9)
            {
                Console.WriteLine("Aprovado!");
            }
            else if (nota >= 5)
            {
                Console.WriteLine("Recuperacao");
            }
            else
            {
                Console.WriteLine("Te Vejo na proxima...");
            }

            Console.WriteLine("Fim");
        }
    }  
}
