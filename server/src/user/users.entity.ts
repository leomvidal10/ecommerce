import { Column, Entity, PrimaryGeneratedColumn } from "typeorm";

@Entity()
export class User {

    @PrimaryGeneratedColumn("uuid")
    uuid: string

    @Column({unique: true, nullable: false})
    email: string

    @Column({nullable: false})
    senha: string

    @Column({nullable: false})
    nome: string

    @Column({nullable: false})
    estado: string

    @Column({nullable: false})
    cidade: string

    @Column({nullable: false})
    rua: string

    @Column({nullable: false})
    numero: string

    @Column({nullable: false})
    cep: string
    
    @Column({nullable: false})
    telefone: string
}