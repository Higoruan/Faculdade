import { fastify } from 'fastify' // Framework
import { databaseMemory } from './database.js' // banco de memória importado

const database = new databaseMemory

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

server.get('/videos', () => {
   const videos = database.list()

   return videos
})

server.put('/videos/:id', () => {
    return 'hello world'
})

server.delete('/videos/:id', () => {
    return 'Hello world'
})


server.listen({
    port: 5000,
})