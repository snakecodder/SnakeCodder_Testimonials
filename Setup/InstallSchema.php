<?php


namespace SnakeCodder\Testimonials\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * {@inheritdoc}
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $table_snakecodder_testimonials_testimonial = $setup->getConnection()->newTable($setup->getTable('snakecodder_testimonials_testimonial'));

        $table_snakecodder_testimonials_testimonial->addColumn(
            'testimonial_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,],
            'Entity ID'
        );

        $table_snakecodder_testimonials_testimonial->addColumn(
            'store_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [],
            'store_id'
        );

        $table_snakecodder_testimonials_testimonial->addColumn(
            'name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'name'
        );

        $table_snakecodder_testimonials_testimonial->addColumn(
            'email',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'email'
        );

        $table_snakecodder_testimonials_testimonial->addColumn(
            'company',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'company'
        );

        $table_snakecodder_testimonials_testimonial->addColumn(
            'profile_img',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'profile_img'
        );

        $table_snakecodder_testimonials_testimonial->addColumn(
            'website',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'website'
        );

        $table_snakecodder_testimonials_testimonial->addColumn(
            'facebook_url',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'facebook_url'
        );

        $table_snakecodder_testimonials_testimonial->addColumn(
            'twitter_url',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'twitter_url'
        );

        $table_snakecodder_testimonials_testimonial->addColumn(
            'content',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'content'
        );

        $table_snakecodder_testimonials_testimonial->addColumn(
            'is_active',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            [],
            'is_active'
        );

        $table_snakecodder_testimonials_testimonial->addColumn(
            'created_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
            null,
            [],
            'created_at'
        );

        $table_snakecodder_testimonials_testimonial->addColumn(
            'updated_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
            null,
            [],
            'updated_at'
        );

        $setup->getConnection()->createTable($table_snakecodder_testimonials_testimonial);
    }
}
