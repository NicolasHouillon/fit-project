<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220319191841 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE exercise (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, link VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exercise_muscle (exercise_id INT NOT NULL, muscle_id INT NOT NULL, INDEX IDX_865E8C84E934951A (exercise_id), INDEX IDX_865E8C84354FDBB4 (muscle_id), PRIMARY KEY(exercise_id, muscle_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE muscle (id INT AUTO_INCREMENT NOT NULL, muscle_group_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_F31119EF44004D0 (muscle_group_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE muscle_group (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE program (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, duration INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE program_training (program_id INT NOT NULL, training_id INT NOT NULL, INDEX IDX_542776BA3EB8070A (program_id), INDEX IDX_542776BABEFD98D1 (training_id), PRIMARY KEY(program_id, training_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE training (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE training_exercise (training_id INT NOT NULL, exercise_id INT NOT NULL, INDEX IDX_49BFC68BBEFD98D1 (training_id), INDEX IDX_49BFC68BE934951A (exercise_id), PRIMARY KEY(training_id, exercise_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE training_muscle_group (training_id INT NOT NULL, muscle_group_id INT NOT NULL, INDEX IDX_2A2E2583BEFD98D1 (training_id), INDEX IDX_2A2E258344004D0 (muscle_group_id), PRIMARY KEY(training_id, muscle_group_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, weight DOUBLE PRECISION DEFAULT NULL, height INT DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_program (id INT AUTO_INCREMENT NOT NULL, athlete_id INT NOT NULL, start DATE NOT NULL, ending DATE NOT NULL, INDEX IDX_CAE0698EFE6BCB8B (athlete_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE exercise_muscle ADD CONSTRAINT FK_865E8C84E934951A FOREIGN KEY (exercise_id) REFERENCES exercise (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE exercise_muscle ADD CONSTRAINT FK_865E8C84354FDBB4 FOREIGN KEY (muscle_id) REFERENCES muscle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE muscle ADD CONSTRAINT FK_F31119EF44004D0 FOREIGN KEY (muscle_group_id) REFERENCES muscle_group (id)');
        $this->addSql('ALTER TABLE program_training ADD CONSTRAINT FK_542776BA3EB8070A FOREIGN KEY (program_id) REFERENCES program (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE program_training ADD CONSTRAINT FK_542776BABEFD98D1 FOREIGN KEY (training_id) REFERENCES training (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE training_exercise ADD CONSTRAINT FK_49BFC68BBEFD98D1 FOREIGN KEY (training_id) REFERENCES training (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE training_exercise ADD CONSTRAINT FK_49BFC68BE934951A FOREIGN KEY (exercise_id) REFERENCES exercise (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE training_muscle_group ADD CONSTRAINT FK_2A2E2583BEFD98D1 FOREIGN KEY (training_id) REFERENCES training (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE training_muscle_group ADD CONSTRAINT FK_2A2E258344004D0 FOREIGN KEY (muscle_group_id) REFERENCES muscle_group (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_program ADD CONSTRAINT FK_CAE0698EFE6BCB8B FOREIGN KEY (athlete_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE exercise_muscle DROP FOREIGN KEY FK_865E8C84E934951A');
        $this->addSql('ALTER TABLE training_exercise DROP FOREIGN KEY FK_49BFC68BE934951A');
        $this->addSql('ALTER TABLE exercise_muscle DROP FOREIGN KEY FK_865E8C84354FDBB4');
        $this->addSql('ALTER TABLE muscle DROP FOREIGN KEY FK_F31119EF44004D0');
        $this->addSql('ALTER TABLE training_muscle_group DROP FOREIGN KEY FK_2A2E258344004D0');
        $this->addSql('ALTER TABLE program_training DROP FOREIGN KEY FK_542776BA3EB8070A');
        $this->addSql('ALTER TABLE program_training DROP FOREIGN KEY FK_542776BABEFD98D1');
        $this->addSql('ALTER TABLE training_exercise DROP FOREIGN KEY FK_49BFC68BBEFD98D1');
        $this->addSql('ALTER TABLE training_muscle_group DROP FOREIGN KEY FK_2A2E2583BEFD98D1');
        $this->addSql('ALTER TABLE user_program DROP FOREIGN KEY FK_CAE0698EFE6BCB8B');
        $this->addSql('DROP TABLE exercise');
        $this->addSql('DROP TABLE exercise_muscle');
        $this->addSql('DROP TABLE muscle');
        $this->addSql('DROP TABLE muscle_group');
        $this->addSql('DROP TABLE program');
        $this->addSql('DROP TABLE program_training');
        $this->addSql('DROP TABLE training');
        $this->addSql('DROP TABLE training_exercise');
        $this->addSql('DROP TABLE training_muscle_group');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE user_program');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
