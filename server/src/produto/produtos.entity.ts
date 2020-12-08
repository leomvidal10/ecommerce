import { Column, Entity, PrimaryGeneratedColumn } from "typeorm";

@Entity()
export class Produto {

    @PrimaryGeneratedColumn("uuid")
    uuid: string

    @Column({nullable: false})
    img: string

    @Column({nullable: false})
    nome: string

    @Column({nullable: false})
    preco: number

    @Column({nullable: false, default: 0})
    quantidade: number
}