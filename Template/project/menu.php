<div class="dropdown">
    <a href="#" class="dropdown-menu dropdown-menu-link-icon"><i class="fa fa-cog fa-fw"></i><i class="fa fa-caret-down"></i></a>
    <ul>
        <?php if($more): ?>
        <li>
            <i class="fa  fa-book" aria-hidden="true"></i>
            <?= $this->modal->medium('', t('additional'), 'ContactsController', 'details', array('plugin' => 'contacts', 'project_id' => $project['id'], 'contacts_id' => $contacts_id)) ?>
        </li>
        <?php endif ?>
        <li>
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            <?= $this->modal->medium('', t('Edit'), 'ContactsController', 'edit', array('plugin' => 'contacts', 'project_id' => $project['id'], 'contacts_id' => $contacts_id)) ?>
        </li>
        <li>
            <i class="fa fa-trash-o" aria-hidden="true"></i>
            <?= $this->modal->medium('', t('Remove'), 'ContactsController', 'confirm', array('plugin' => 'contacts', 'project_id' => $project['id'], 'contacts_id' => $contacts_id)) ?>
        </li>
    </ul>
</div>