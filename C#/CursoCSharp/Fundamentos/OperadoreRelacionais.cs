using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.Fundamentos
{
    internal class OperadoreRelacionais
    {
        public static void Executar()
        {
            Console.WriteLine("Digite a sua nota: ");
            double.TryParse(Console.ReadLine(), out double nota);
            double notaDeCorte = 7;

            Console.WriteLine("Nota inválida? {0}", nota > 10);
            Console.WriteLine("Nota inválida? {0}", nota < 0);
            Console.WriteLine("Nota perfeita? {0}", nota == 10);
            Console.WriteLine("Tem como melorar? {0}", nota != 10);
            Console.WriteLine("Passou por média? {0}", nota >= notaDeCorte);
            Console.WriteLine("Recuperação? {0}", nota < notaDeCorte);
            Console.WriteLine("Reprovado? {0}", nota <= 3);

        }
    }
}
