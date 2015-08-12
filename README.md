# Magepim_Pimcore
Basic Magento extension that allows Pimcore view templates to be incorporated into Magento themes.

In your Magento Templates just call the reevant view helper e.g. <?php echo  Mage::helper('pimcore/view')->pimcoreTemplate("/website/views/scripts/includes/footer.php") ?>

At the moment the full path to the pimcore template from the root has to be set in teh view helper method call.  I'm working on this so it can be called in the same way as it is in Pimcore.

Minfo and updates will be poseted over at http://magepim.com
