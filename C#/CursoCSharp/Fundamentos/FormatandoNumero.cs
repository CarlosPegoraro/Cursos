using System;
using System.Globalization;

namespace CursoCSharp.Fundamentos
{
    internal class FormatandoNumero
    {
        public static void Executar()
        {
            double valor = 15.175;
            //aredondar para 1 casa decimal
            Console.WriteLine(valor.ToString("F1"));
            //valor monetario
            Console.WriteLine(valor.ToString("C"));
            //porcentagem
            Console.WriteLine(valor.ToString("P"));
            //casas decimais
            Console.WriteLine(valor.ToString("#.##"));

            //definir uma cultura
            CultureInfo cultura = new CultureInfo("en-US");
            Console.WriteLine(valor.ToString("C3", cultura));

            int inteiro = 256;
            //preencher ate o numero tem x posicoes
            Console.WriteLine(inteiro.ToString("D5"));

        }
    }
}
