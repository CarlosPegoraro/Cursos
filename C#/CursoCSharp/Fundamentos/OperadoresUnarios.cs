using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.Fundamentos
{
    internal class OperadoresUnarios
    {
        public static void Executar()
        {
            int valorNegativo = -5;
            int numero1 = 2;
            int numero2 = 3;
            bool booleano = true;

            Console.WriteLine(-valorNegativo);
            Console.WriteLine(!booleano);

            numero1++;
            Console.WriteLine(numero1);

            --numero1;
            Console.WriteLine(numero1);

            Console.WriteLine(numero1++ == --numero2);
            Console.WriteLine(numero1);
            Console.WriteLine(numero2);
        }
    }
}
