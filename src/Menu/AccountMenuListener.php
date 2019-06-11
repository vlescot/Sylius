<?php

namespace App\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AccountMenuListener
{
    public function removeAccountMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        foreach ($menu->getChildren() as $child) {
            if ($child->getName() === 'dashboard') {
                $menu->removeChild($child->getName());
            }
        }
    }
}
