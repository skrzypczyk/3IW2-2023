<form
        action="<?= $config["config"]["action"]??"" ?>"
        method="<?= $config["config"]["method"]??"POST" ?>"
        id="<?= $config["config"]["id"]??"" ?>"
        class="<?= $config["config"]["class"]??"" ?>"
>

    <?php foreach ($config["inputs"] as $name=>$input):?>

            <input
                    name="<?= $name ?>"
                    type="<?= $input["type"]??"text"?>"
                    class="<?= $input["class"]??""?>"
                    id="<?= $input["id"]??""?>"
                    placeholder="<?= $input["placeholder"]??""?>"
                    <?= $input["required"]?"required":""  ?>
                    ><br>

    <?php endforeach;?>


    <input type="submit" value="<?= $config["config"]["submit"]??"Envoyer" ?>">
</form>