using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.Fundamentos
{
    internal class OperadoresLogicos
    {
        public static void Executar()
        {
            bool executouTrabalho1 = true;
            bool executouTrabalho2 = false;

            bool comprouTV50 = executouTrabalho1 && executouTrabalho2;
            Console.WriteLine("Comprou a Tv 50? {0}", comprouTV50);

            bool comprouSorvete = executouTrabalho1 || executouTrabalho2;
            Console.WriteLine("Comprou o Sorvete? {0}", comprouSorvete);

            bool comprouTv30 = executouTrabalho1 ^ executouTrabalho2;
            Console.WriteLine("Comprou a Tv 30? {0}", comprouTv30);

            Console.WriteLine("Mais saudável? {0}", !comprouSorvete);
        }
    }
}
