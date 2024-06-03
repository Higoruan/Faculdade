// Importa a função randomUUID do módulo crypto do Node.js, usada para gerar UUIDs (Identificadores Únicos Universais)
import { randomUUID } from "node:crypto"

// Criação de uma classe para gerenciar um banco de dados em memória
export class DatabaseMemory {

    // Declaração de um campo privado (sinalizado pelo prefixo #) para armazenar os vídeos em um Map
    #videos = new Map()

    // Método para listar todos os registros de vídeos
    list() {
        // Converte os valores do Map para um array e o retorna
        return Array.from(this.#videos.values())
    }

    // Método para criar um novo registro de vídeo
    create(video) {
        // Gera um UUID único para o novo vídeo
        const videoId = randomUUID()

        // Adiciona o novo vídeo ao Map usando o UUID como chave
        this.#videos.set(videoId, video)
    }

    // Método para atualizar um registro de vídeo existente
    update(id, video) {
        // Atualiza o vídeo no Map correspondente ao ID fornecido
        this.#videos.set(id, video)
    }

    // Método para deletar um registro de vídeo
    delete(id) {
        // Remove o vídeo do Map correspondente ao ID fornecido
        this.#videos.delete(id)
    }

}
