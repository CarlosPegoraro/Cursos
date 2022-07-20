using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.Fundamentos
{
    internal class Inferencia
    {
        public static void Executar()
        {
            //Pode se criar uma variavel sem declarar o tipo, o primeiro tipo inserido sera o tipo dela
            var nome = "Leonardo";
            
            Console.WriteLine(nome);

            //Obrigatorio declarar e colocar os dados nela na inicializacao
            //var idade;
            var idade = 32;
            Console.WriteLine(idade);
        }
    }
}
