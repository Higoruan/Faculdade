import { fastify } from 'fastify' // Framework
import { DatabaseMemory } from './database.js' // banco de memória importado

const database = new DatabaseMemory

const server = fastify()

server.post('/videos', (request, reply) => {

    // Extrai o título, descrição e duração do corpo da requisição
    const { title, description, duration } = request.body

    // Cria um novo registro no banco de dados com os dados fornecidos
    database.create({
        title,
        description,
        duration,
    })

    // Lista todos os registros no banco de dados e imprime no console do servidor
    console.log(database.list())

    // Retorna uma resposta de sucesso com status 201 (Created) para o cliente
    return reply.status(201).send()

})

// Rota para obter a lista de vídeos
server.get('/videos', () => {
    // Obtém a lista de vídeos do banco de dados
    const videos = database.list()

    // Retorna a lista de vídeos
    return videos
})

// Rota para atualizar um vídeo específico
server.put('/videos/:id', (request, reply) => {
    // Obtém o ID do vídeo a partir dos parâmetros da requisição
    const videoId = request.params.id

    // Obtém os dados do vídeo (título, descrição e duração) a partir do corpo da requisição
    const { title, description, duration } = request.body

    // Atualiza o vídeo no banco de dados com os novos dados
    database.update(videoId, {
        title,
        description,
        duration,
    })

    // Retorna uma resposta com status 204 (No Content)
    return reply.status(204).send()
})

// Rota para deletar um vídeo específico
server.delete('/videos/:id', (request, reply) => {
    // Obtém o ID do vídeo a partir dos parâmetros da requisição
    const videoId = request.params.id

    // Deleta o vídeo do banco de dados
    database.delete(videoId)

    // Retorna uma resposta com status 204 (No Content)
    return reply.status(204).send()
})

// Inicia o servidor na porta 5000
server.listen({
    port: 5000,
})