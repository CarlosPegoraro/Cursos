using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.EstruturaDeControle
{
    internal class EstruturaWhile
    {
        public static void Executar()
        {
            int palpite = 0;
            Random random = new Random();

            int numeroSecreto = random.Next(1, 16);
            bool numeroEncontrado = false;
            int tentativasRestantes = 5;
            int tentativas = 0;

            while (tentativasRestantes > 0  && !numeroEncontrado)
            {
                Console.WriteLine("Insira o seu palpite: ");
                int.TryParse(Console.ReadLine(), out palpite);
                tentativas++;
                tentativasRestantes--;

                if (numeroSecreto == palpite)
                {
                    numeroEncontrado = true;
                    var corAnterior = Console.BackgroundColor;
                    Console.BackgroundColor = ConsoleColor.Green;
                    Console.WriteLine($"Numero encontrado em {tentativas} tentativas");
                    Console.BackgroundColor = corAnterior;
                }
                else if (numeroSecreto > palpite)
                {
                    Console.WriteLine("Maior...tente novamente");
                    Console.WriteLine($"Tentativas restantes: {tentativasRestantes}");
                }
                else
                {
                    Console.WriteLine("Menor...tente novamente!");
                    Console.WriteLine($"Tentativas restantes: {tentativasRestantes}");
                }
            }
        }
    }
}
