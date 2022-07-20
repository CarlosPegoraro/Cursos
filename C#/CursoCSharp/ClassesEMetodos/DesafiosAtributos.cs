using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace CursoCSharp.ClassesEMetodos
{
    internal class DesafiosAtributos
    {
        int a = 10;

        public static void Executar()
        {
            var obj = new DesafiosAtributos();
            var coleta = obj.a;
            Console.WriteLine(coleta);
        }
    }
}
