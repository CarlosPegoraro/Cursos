using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.Colecoes
{
    internal class ColecoesIgualdade
    {
        public static void Executar()
        {
            var p1 = new Produto("Caneta", 1.89);
            var p2 = new Produto("Caneta", 1.89);
            var p3 = p2;

            //verifica se os dois operdores apontam para o mesmo lugar de memoria
            Console.WriteLine(p1 == p2);
            Console.WriteLine(p3 == p2);
        }
    }
}
