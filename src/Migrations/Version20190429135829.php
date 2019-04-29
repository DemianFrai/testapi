<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190429135829 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'add app and request tables';
    }

    public function up(Schema $schema) : void
    {
        $appTable = $schema->createTable('app');
        $appTable->addColumn('id', 'integer', ['autoincrement' => true]);
        $appTable->addColumn('title', 'string', ['length' => 80]);
        $appTable->addColumn('platform', 'string', ['length' => 10]);
        $appTable->addColumn('icon', 'string', ['length' => 256]);
        $appTable->addColumn('link', 'string', ['length' => 256]);
        $appTable->setPrimaryKey(['id']);

        $requestTable = $schema->createTable('request');
        $requestTable->addColumn('id', 'integer', ['autoincrement' => true]);
        $requestTable->addColumn('name', 'string', ['length' => 256]);
        $requestTable->addColumn('comment', 'string', ['length' => 256]);
        $requestTable->addColumn('photo', 'string', ['length' => 256, 'null' => true]);
        $requestTable->setPrimaryKey(['id']);
    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('app');
        $schema->dropTable('request');

    }
}
