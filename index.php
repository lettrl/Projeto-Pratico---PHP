<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentio Tech</title>

    <style>

    body{
        background-color: black;
        margin: 0px;
        padding: 0;
    }    

    header{
         background: linear-gradient(to left, #57b6ee,#3d17a8);
         color:white;
         padding: 10px 25px;
         margin-top: 20px;
         display: flex;
         justify-content: space-between;
         align-items: center;
        }

        header h1{
            font-family:monospace;
            font-size: 40px;
            margin-left: 50px;
            margin-bottom: 15px;    
            
        }
        
        header nav{
            align-items: center;
            display: flex;       
        }

        header nav a{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: white;
            font-size: 20px;
            margin-left: 15px;
            text-decoration: none;
            cursor: pointer;          
        }

        .bloco-um{
            padding: 35px; 
            background: black;
            margin-top: 35px;  
            
        }
        .bloco-um h1{
          font-family: monospace; 
          color: white;
          font-size: 35px;
          text-align: center;
        }

        .bloco-um p{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: white;
            font-size: 18px;
            text-align: center;
        }

        .bloco-um button{
            background-color: #3e17a8;
            color: white;
            font-size: 20px;
            font-weight: bold;
            padding: 20px;
            border-radius: 35px;
            border: none;
            margin: 25px auto 0 auto;
            display: block;
            cursor: pointer;
        }

        .bloco-dois{
            display: flex;
            justify-content: space-between;
            margin-top: 35px;
            gap: 10px;
            flex-wrap: wrap;
         }

         .card{
            flex:1;
            min-width: 250px;  
            background-color: #4c9ccae3;
            border:1px solid #0a0707;
            border-radius: 10px;
            padding: 10px;
            margin: 20px;
         }

         .card h3{
            font-family:monospace;
            color: white;
            font-size: 18px;
         }

         .card p{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: white;
            font-size: 15px;
            text-align: center;
         }

         .bloco-tres{
            padding: 35px; 
            background:black;
            margin-top:35px;
         }

         .bloco-tres h2{
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: white;
            font-size: 30px;
            text-align: center;
         }

        input[type="text"],
        input[type="email"],
        textarea,
        select{
            width: 100%;
            padding: 10px;
            margin-top:5px;
            background-color: rgba(138, 122, 122, 0.178);
            color: white;
            font-size: 20px;
            border: 1px solid #6b6868;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            height: 100px;
            
        }
        
        input[type="submit"]{
            background-color: #3e17a8;
            color: #f0eaea;
            font-size: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 25px auto 0 auto;
            display: block;
        }
        input[type="submit"]:hover{
            background-color: #4c9ccae3;
        }

        footer{
          color: white;
          padding: 10px;
        }
        
    </style>
</head>
<body>

    <header>
        <h1>Sentio Tech Labs</h1>
        <nav>
            <a href="#funcionalidades">Funcionalidades</a>
            <a href="#contato">Contato</a>
        </nav>
    </header>
 
    <main>
    <div class="bloco-um">
        <h1>Soluções de Software que impulsionam e transformam o seu negócio</h1>
        
        <p>Transformamos processos complexos em softwares intuitivos que economizam tempo e otimizam a sua operação.</p>
        
        <button>Veja nossos projetos</button>
    </div>

    <div class="bloco-dois" id="funcionalidades">
      <div class="card">
        <h3>Desenvolvimento Web e Mobile</h3>
        <p>Performance e responsividade, foco na experiência do usuário e nos seus objetivos de negócio.</p>
      </div>
      <div class="card">
        <h3>Soluções em Cibersegurança</h3>
        <p>Defesa proativa com firewalls de última geração, sistemas de detecção de intrusos (IDS/IPS) e políticas de segurança robustas.</p>
      </div>
      <div class="card">
        <h3>IA e Análise de Dados</h3>
        <p>Algoritmos avançados para identificar padrões, prever tendências de mercado e personalizar a experiência do seu cliente.</p>
      </div>
    </div>

    <div class="bloco-tres" id="contato">
      <h2>Entre em contato</h2>
      <form action="sentio.php" method="POST">
        <label for="nome"></label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

        <label for="email"></label>
        <input type="email" id="email" name="email" placeholder="Digite seu email">

        <label for="mensagem"></label>
        <textarea id="mensagem" name="mensagem" placeholder="Sua mensagem"></textarea>

        <input type="submit" value="Enviar">
      </form>
    </div>
  </div>
  </main>

</body>
</html>