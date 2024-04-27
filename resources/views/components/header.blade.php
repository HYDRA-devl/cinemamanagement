<header class="header">
    <div class="section1">
        <a href="#" >Film</a>
        <a href="#" >Cinema</a>
        <a href="#" >Offre</a>
    </div>
    <div class="section2">
        <a href="{{route("registration")}} " >Creer un compte</a>
        <a href="#" >FR</a>
    </div>
</header>

<style>
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        height: 4rem;
        position: absolute;
        top: 0;
        z-index: 20;
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
    }

    .section1,
    .section2 {
        display: flex;
        align-items: center;
        gap: 3rem;
        padding: 0 2rem;
        height: 100%;
        
    }

    .section2 {
        padding-right: 8px;
       
    }

    a {
        color: white;
        font-style: normal;
        font-weight: 600;
        font-family: Arial, Helvetica, sans-serif;
        text-decoration: none; /* Remove underline */
        z-index: 10;
    }
</style>
