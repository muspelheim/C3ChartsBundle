# Installation

1. Run `composer require muspelheim/c3charts-bundle`

2. Register the bundle in your `app/AppKernel.php`:

   ``` php
    <?php
    ...
    public function registerBundles()
    {
        $bundles = array(
            ...
            new Muspelheim\C3ChartsBundle\MuspelheimC3ChartsBundle(),
            ...
        );
    ...
   ```

3. That's all!
