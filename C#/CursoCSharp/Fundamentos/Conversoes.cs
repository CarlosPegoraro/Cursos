using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.Fundamentos
{
    internal class Conversoes
    {
        public static void Executar()
        {
            //Pode com certeza, int < double
            int inteiro = 10;
            double quebrado = inteiro;
            Console.WriteLine(quebrado);

            //Nao pode, int nao tem decimais
            double nota = 9.7;
            int notaTruncada = (int) /*usando o (int), voce declara que a variavel vai ter o tipo int*/ nota;
            Console.WriteLine($"Nota Truncada: {notaTruncada}");

            //conversao com int.Parse()
            Console.WriteLine("Digite sua idade: ");
            string idadeString = Console.ReadLine();
            int idadeInteriro = int.Parse(idadeString);
            Console.WriteLine($"Idade insirida: {idadeInteriro}");

            //conversao com classe do system puro
            idadeInteriro = Convert.ToInt32(idadeString);
            Console.WriteLine($"Resultado: {idadeInteriro}");

            /*//conversao de forma segura
            Console.Write("Digite um número: ");
            string palavra = Console.ReadLine();
            int numero;
            int.TryParse(palavra, out numero);
            Console.WriteLine("Resultado: {0}", numero);*/

            Console.Write("Digite um número: ");
            int.TryParse(Console.ReadLine(), out int numero);
            Console.WriteLine("Resultado: {0}", numero);
        }
    }
}
