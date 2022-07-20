using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.EstruturaDeControle
{
    internal class EstruturaForeach
    {
        public static void Executar()
        {
            var palavra = "opa!";

            foreach (var letra in palavra)
            {
                Console.WriteLine(letra);
                 
            }

            var alunos = new string[] { "Ana", "Bia", "CArlos" };

            foreach (string aluno in alunos)
            {
                Console.WriteLine(aluno);

            }
        }
    }
}
