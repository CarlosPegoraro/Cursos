using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.Fundamentos
{
    internal class VariaveisEConstantes
    {
        public static void Executar()
        {
            // área da circunferência
            double raio = 4.5;
            const double pi = 3.14;

            raio = 5.5;

            //Para reais enormes - 8 bytes
            double area = pi * raio * raio;
            Console.WriteLine(area);
            Console.WriteLine("A área é " + area);

            //Para testes lógicos
            bool estaChovendo = false;
            Console.WriteLine("Está chovendo " + estaChovendo);

            //Para numeros sem sinais e pequenos - 1 byte
            byte idade = 45;
            Console.WriteLine("Idade " + idade);

            //Para numeros com sinal e pequenos - 1 byte
            sbyte saldoDeGols = sbyte.MinValue;
            Console.WriteLine("Saldo de Gols: " + saldoDeGols);

            //Para numeros medios com sinal - 2 bytes
            short salario = short.MaxValue;
            Console.WriteLine("salário: " + salario);

            //Para numeros grandes com sinal - 4 bytes
            int menorValorInt = int.MinValue;
            Console.WriteLine("Menor int: " + menorValorInt); //mais udado para inteiros

            //Para numeros grandes sem sinal - 4 bytes
            uint populacaoBrasileira = 200_600_000;
            Console.WriteLine("População brasileira: " + populacaoBrasileira);

            //para numeros enormes com sinal - 8 bytes
            long menorValorLong = long.MinValue;
            System.Console.WriteLine("Menor valor long: " + menorValorLong);

            //Para numeros enormes sem sinal - 8 bytes
            ulong populacaoMundial = 7_900_000_000;
            Console.WriteLine("Populacao mundial: " + populacaoMundial);

            //para reais medios - 4 bytes
            float precoComputador = 1299.99f;
            Console.WriteLine("Preco do pc: " + precoComputador);

            double precoApple = 140000000.00;
            Console.WriteLine("Valor Apple: " + precoApple); //Mais udado para reais

            //Simplesmente enorme
            decimal a = 1524525422652;
            Console.WriteLine("A: " + a);

            //Para uma letra
            char letra = 'a';
            Console.WriteLine("Letra " + letra);

            //Para string
            string texto = "Alo aço alo";
            Console.WriteLine(texto);
        }
    }
}
