<!DOCTYPE html>
@extends('layouts.master')
@section('title','Home')
@section('content')
    <h1>Home</h1>
    <p>This is my body content.</p>
@endsection

<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的第一个网页</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            background-color: #444;
            color: white;
            padding: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .container {
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>欢迎来到我的网页</h1>
</header>

<nav>
    <a href="#home">首页</a>
    <a href="#about">关于我</a>
    <a href="#contact">联系我</a>
</nav>

<div class="container">
    <section id="home">
        <h2>首页内容</h2>
        <p>这是我的第一个 HTML 网页。在这里，我可以放入任何内容！</p>
        <img src="https://via.placeholder.com/300" alt="示例图片">
    </section>

    <section id="about">
        <h2>关于我</h2>
        <p>我是一名网页开发爱好者，目前学习 HTML、CSS 和 JavaScript。</p>
    </section>

    <section id="contact">
        <h2>联系我</h2>
        <form action="submit_form.php" method="post">
            <label for="name">姓名:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">电子邮件:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">留言:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br><br>

            <input type="submit" value="提交">
        </form>
    </section>
</div>

<footer>
    <p>&copy; 2024 我的第一个网页</p>
</footer>

</body>
</html>
