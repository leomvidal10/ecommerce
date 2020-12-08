import { Column, Entity, PrimaryGeneratedColumn } from "typeorm";

@Entity()
export class admUser {

    @PrimaryGeneratedColumn("uuid")
    uuid: string

    @Column({nullable: false})
    nome: string

    @Column({nullable: false})
    senha: string
}