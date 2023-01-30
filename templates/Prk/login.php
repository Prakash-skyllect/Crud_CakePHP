<head>
<!--    <script src="https://kit.fontawesome.com/35c4f0c859.js" crossorigin="anonymous"></script>-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!--    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700;900&family=Sofia+Sans:wght@300;400;700&display=swap" rel="stylesheet">-->
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 600px;
        font-family: 'Roboto', sans-serif;
        background-color: rgb(229, 231, 235);
    }

    h2 {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.5rem;
        font-weight: 900;
        color: rgb(55, 65, 81);
    }

    form {
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        padding: 48px;
        margin-top: 2rem;
        width: 370px;
        height: 400px;
        background-color: #fff;
        border-radius: 4px;
        box-shadow: 4px 4px 7px lightgray;
    }

    label {
        display: flex;
        text-transform: capitalize;
        margin-top: 1.2rem;
        margin-bottom: 1.1rem;
        font-size: 15px;
        /*font-size: 0.9rem;*/
        letter-spacing: 0.5px;
        font-weight:400;
        color: rgb(55, 65, 81);
    }
    input {
        width: 100%;
        line-height: 3rem;
        background-color: rgb(229, 231, 235);
        border: none;
        border-radius: 4px;
    }

    button {
        margin-top: 2.2rem;
        width: 100%;
        height: 3rem;
        text-transform: capitalize;
        font-size: 0.9rem;
        font-weight: 700;
        font-family: 'Roboto', sans-serif;
        color: rgb(220, 229, 247);
        background-color: rgb(37, 99, 235);
        border-radius: 4px;
        border: none;
        cursor: pointer;
    }

    div {
        width: 100%;
        margin-top: 1.4rem;
    }

    a {
        margin: 0 10px;
        font-size: 0.8rem;
        font-weight: 300;
        letter-spacing: 0.5px;
        text-decoration: none;
        color: rgb(37, 99, 235);
        text-transform: capitalize;
    }

    span {
        font-size: 0.7rem;
        color: rgb(37, 99, 235);
    }
    .top-nav-links , .top-nav-title , .css_link{
        display: none;
    }

</style>

<body>
<section>
    <h2 class="title">Log-in / Sign up Page</h2>

<!--    <form action="add" >-->
<!--        <label for="username">username or email</label>-->
<!--        <input type="text">-->
<!--        <label for="password">password</label>-->
<!--        <input type="text">-->
<!--        <button class="#">login</button>-->
<!--        <div>-->
<!--            <a href="" target="_blank" rel="noopener">forgot password</a>-->
<!--            <span>/</span>-->
<!--            <a href="" target="_blank" rel="noopener">sign up</a>-->
<!--        </div>-->
<!--    </form>-->


    <?= $this->Form->Create() ?>
    <?= $this->Form->Control('name')?>
    <?= $this->Form->Control('email')?>
    <?= $this->Form->button('save')?>
    <?= $this->Form->end(); ?>

</section>


</body>
